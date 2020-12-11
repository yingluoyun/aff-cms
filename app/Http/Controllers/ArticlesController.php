<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    //文章列表
    public function article()
    {
        return view('home.article');
    }
    public function getarticles(Request $req)
    {

        $page = $req->page ?? 1;
        $limit = $req->limit ?? 10;
        $res = DB::table('article_list')->limit($limit)->offset($limit * ($page - 1))->get();
        $count = DB::table('article_list')->get()->count();
        return json_encode(['code' => 0, 'data' => $res, 'count' => $count]);
    }
    //添加文章
    public function addart(){
        $res = DB::table('main_sites')->get();
        // dd($res);
        return view('home.addart',['data'=>$res]);
    }
    public function addarticle(Request $req)
    {
        $mid = $req->id;
        return view('home.addarticle',['mid'=>$mid]);
    }

    public function addtoarticle(Request $req)
    {
        $data1 = [
            'url' => $req->url,
            'img' => $req->img,
            'tag' => $req->tag,
            'description' => $req->description,
            'mid' => $req->mid,
            'title' => $req->title,
            'status' => $req->status,
            'created_at' => time(),
            'updated_at' => time(),
            'like' => 0,
            'dislike' => 0,
            'view' => 0
        ];
        if ($data1['mid'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '主题ID不能为空')));
        }
        if ($data1['title'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '文章title不能为空')));
        }
        if ($data1['status'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '文章状态不能为空')));
        }
        if ($data1['url'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网址不能为空')));
        }
        if ($data1['description'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => 'description不能为空')));
        }
        if ($data1['tag'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => 'tagID不能为空')));
        }
        if ($data1['img'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => 'imgUrl不能为空')));
        }
        $aid = DB::table('article_list')->insertGetId($data1);
        if (!$aid) {
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        $data2 = [
            'aid' => $aid,
            'content' => $req->content,
        ];
        if ($data2['content'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '文章内容不能为空')));
        }
        $res = DB::table('articles')->insert($data2);
        if (!$res) {
            DB::table('article_list')->where('id', $aid)->delete();
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '添加成功']);
    }
    //编辑文章
    public function eidtarticle(Request $req)
    {
        $id = $req->id;
        $res = DB::table('article_list')->where('id', $id)->first();
        $res1 = DB::table('articles')->where('aid', $id)->first();
        // dd($res1);
        if (!$res) {
            echo "<script>alert('查无此文章！');window.history.go(-1);</script>";
        }
        return view('home.eidtarticle', ['data' => $res,'data1' => $res1]);
    }

    //编辑文章保存
    public function eidttoarticle(Request $req)
    {
        $id = $req->id;
        $data1 = [
            'url' => $req->url,
            'img' => $req->img,
            'tag' => $req->tag,
            'description' => $req->description,
            'mid' => $req->mid,
            'like' => $req->like,
            'dislike' => $req->dislike,
            'view' => $req->view,
            'title' => $req->title,
            'status' => $req->status,
            'updated_at' => time()
        ];
        if ($data1['like'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => 'like不能为空')));
        }
        if ($data1['dislike'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => 'dislike不能为空')));
        }
        if ($data1['view'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => 'view不能为空')));
        }
        if ($data1['mid'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '主题ID不能为空')));
        }
        if ($data1['title'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '文章title不能为空')));
        }
        if ($data1['status'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '文章状态不能为空')));
        }
        if ($data1['url'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网址不能为空')));
        }
        if ($data1['description'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => 'description不能为空')));
        }
        if ($data1['tag'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => 'tagID不能为空')));
        }
        if ($data1['img'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => 'imgUrl不能为空')));
        }
        $data2 = [
            'content' => $req->content
        ];
        if ($data2['content'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '文章内容不能为空')));
        }
        $res= DB::table('article_list')->where('id',$id)->update($data1);
        $res1 = DB::table('articles')->where('aid',$id)->update($data2);
        if (!($res1||$res)) {
            return json_encode(['code' => 1, 'msg' => "更新失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '更新成功']);
    }
    
    //文章删除
    public function delarticle($id)
    {
        $res = DB::table('article_list')->where('id', $id)->delete();
        $res1 = DB::table('articles')->where('aid', $id)->delete();
        // dd($res1);
        if (!$res1) {
            return json_encode(['code' => 1, 'msg' => "删除失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '删除成功']);
    }
}
