<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubsitesController extends Controller
{
    //子站列表
    public function subsites()
    {
        return view('home.subsites');
    }
    //获取子站列表
    public function getsubsites(Request $req)
    {
        $page = $req->page ?? 1;
        $limit = $req->limit ?? 10;
        $res = DB::table('sub_sites')->limit($limit)->offset($limit * ($page - 1))->get();
        $count = DB::table('sub_sites')->get()->count();
        return json_encode(['code' => 0, 'data' => $res, 'count' => $count]);
    }
    //新建子站页面
    public function addsub()
    {
        $res = DB::table('main_sites')->get();
        // dd($res);
        return view('home.addsub', ['data' => $res]);
    }
    public function addsubsites1(Request $req)
    {
        $mid = $req->mid;
        $theme = $req->theme;
        return view('home.theme1.addsubsites', ['mid' => $mid,'theme' => $theme,]);
    }
    //子站删除
    public function delsubsites($id)
    {
        $res = DB::table('sub_sites')->where('id', $id)->delete();
        $res1 = DB::table('theme1_subsites')->where('sid', $id)->delete();
        // dd($res1);
        if (!$res1) {
            return json_encode(['code' => 1, 'msg' => "删除失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '删除成功']);
    }
    //添加子站主题1
    
    public function addtosubsites1(Request $req)
    {
        $data1['abbr'] = $req->abbr;
        $data1['url'] = $req->url;
        $data1['status'] = $req->status;
        $data1['mid'] = $req->mid;
        $data1['theme'] = $req->theme;
        $data['title'] = $req->title;
        $data['description'] = $req->description;
        $data['topimgalt'] = $req->topimgalt;
        $data['toptext1'] = $req->toptext1;
        $data['toptext2'] = $req->toptext2;
        $data['toptext3'] = $req->toptext3;
        $data['iosurl'] = $req->iosurl;
        $data['andurl'] = $req->andurl;
        $data['weburl'] = $req->weburl;
        $data['webname'] = $req->webname;
        $data['main5text2'] = $req->main5text2;
        $data['main5text1'] = $req->main5text1;
        $data['main5img2alt'] = $req->main5img2alt;
        $data['main5img1alt'] = $req->main5img1alt;
        $data['main4text2'] = $req->main4text2;
        $data['main4text1'] = $req->main4text1;
        $data['main4img2alt'] = $req->main4img2alt;
        $data['main4img1alt'] = $req->main4img1alt;
        $data['main3text2'] = $req->main3text2;
        $data['main3text1'] = $req->main3text1;
        $data['main3img2alt'] = $req->main3img2alt;
        $data['main3img1alt'] = $req->main3img1alt;
        $data['main2text2'] = $req->main2text2;
        $data['main2text1'] = $req->main2text1;
        $data['main2img2alt'] = $req->main2img2alt;
        $data['main2img1alt'] = $req->main2img1alt;
        $data['main1text2'] = $req->main1text2;
        $data['main1text1'] = $req->main1text1;
        $data['main1img2alt'] = $req->main1img2alt;
        $data['main1img1alt'] = $req->main1img1alt;
        $data['footer'] = $req->afooter;
        $data['topimgurl'] = $req->topimgurl;
        $data['main1img2'] = $req->main1img2;
        $data['main1img1'] = $req->main1img1;
        $data['main2img2'] = $req->main2img2;
        $data['main2img1'] = $req->main2img1;
        $data['main3img2'] = $req->main3img2;
        $data['main3img1'] = $req->main3img1;
        $data['main4img2'] = $req->main4img2;
        $data['main4img1'] = $req->main4img1;
        $data['main5img2'] = $req->main5img2;
        $data['main5img1'] = $req->main5img1;
        $data['banner1img'] = $req->banner1img;
        $data['banner2img'] = $req->banner2img;
        $data['banner2content'] = $req->banner2content;
        $data['banner1content'] = $req->banner1content;
        $data['banner2title'] = $req->banner2title;
        $data['banner1title'] = $req->banner1title;
        $data['banner2imgalt'] = $req->banner2imgalt;
        $data['banner1imgalt'] = $req->banner1imgalt;
        $data['bannertitle'] = $req->bannertitle;
        if ($data1['mid'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '主站ID不能为空')));
        }
        if ($data1['abbr'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网站简称不能为空')));
        }
        if ($data1['url'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网址不能为空')));
        }
        if ($data1['status'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网站状态不能为空')));
        }
        if ($data['footer'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '底部内容不能为空')));
        }
        if ($data['title'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网站标题不能为空')));
        }
        if ($data['description'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网站描述不能为空')));
		}
        $res1 = DB::table('sub_sites')->insertGetId($data1);
        if (!$res1) {
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        $data['sid'] =$res1;
        $res = DB::table('theme1_subsites')->insert($data);
        if (!$res) {
            DB::table('main_sites')->where('id', $res1)->delete();
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '添加成功']);
    }
    //编辑子站页面
    public function eidtsubsites1(Request $req)
    {
        $id = $req->id;
        $mid = $req->id;
        $res1 = DB::table('sub_sites')->where('id', $id)->first();
        $res = DB::table('theme1_subsites')->where('sid', $id)->first();
        $res2 = DB::table('programa')->orderBy('lid')->where('mid', $mid)->get();
        // dd($res1);
        if (!$res) {
            echo "<script>alert('警告，非法操作！');window.history.go(-1);</script>";
        }
        return view('home.theme1.eidtsubsites', ['data' => $res, 'data1' => $res1, 'data2' => $res2]);
    }
    
    //编辑保存子站主题1处理
    public function eidtsubsites1save(Request $req)
    {
        $id = $req->id;
     //   $data1['mid'] = $req->mid;
        $data1['abbr'] = $req->abbr;
        $data1['url'] = $req->url;
        $data1['status'] = $req->status;
        $data['title'] = $req->title;
        $data['description'] = $req->description;
        $data['topimgalt'] = $req->topimgalt;
        $data['toptext1'] = $req->toptext1;
        $data['toptext2'] = $req->toptext2;
        $data['toptext3'] = $req->toptext3;
        $data['iosurl'] = $req->iosurl;
        $data['andurl'] = $req->andurl;
        $data['weburl'] = $req->weburl;
        $data['webname'] = $req->webname;
        $data['main5text2'] = $req->main5text2;
        $data['main5text1'] = $req->main5text1;
        $data['main5img2alt'] = $req->main5img2alt;
        $data['main5img1alt'] = $req->main5img1alt;
        $data['main4text2'] = $req->main4text2;
        $data['main4text1'] = $req->main4text1;
        $data['main4img2alt'] = $req->main4img2alt;
        $data['main4img1alt'] = $req->main4img1alt;
        $data['main3text2'] = $req->main3text2;
        $data['main3text1'] = $req->main3text1;
        $data['main3img2alt'] = $req->main3img2alt;
        $data['main3img1alt'] = $req->main3img1alt;
        $data['main2text2'] = $req->main2text2;
        $data['main2text1'] = $req->main2text1;
        $data['main2img2alt'] = $req->main2img2alt;
        $data['main2img1alt'] = $req->main2img1alt;
        $data['main1text2'] = $req->main1text2;
        $data['main1text1'] = $req->main1text1;
        $data['main1img2alt'] = $req->main1img2alt;
        $data['main1img1alt'] = $req->main1img1alt;
        $data['footer'] = $req->afooter;
        $data['topimgurl'] = $req->topimgurl;
        $data['main1img2'] = $req->main1img2;
        $data['main1img1'] = $req->main1img1;
        $data['main2img2'] = $req->main2img2;
        $data['main2img1'] = $req->main2img1;
        $data['main3img2'] = $req->main3img2;
        $data['main3img1'] = $req->main3img1;
        $data['main4img2'] = $req->main4img2;
        $data['main4img1'] = $req->main4img1;
        $data['main5img2'] = $req->main5img2;
        $data['main5img1'] = $req->main5img1;
        $data['banner1img'] = $req->banner1img;
        $data['banner2img'] = $req->banner2img;
        $data['banner2content'] = $req->banner2content;
        $data['banner1content'] = $req->banner1content;
        $data['banner2title'] = $req->banner2title;
        $data['banner1title'] = $req->banner1title;
        $data['banner2imgalt'] = $req->banner2imgalt;
        $data['banner1imgalt'] = $req->banner1imgalt;
        $data['bannertitle'] = $req->bannertitle;
        if ($data1['abbr'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网站简称不能为空')));
        }
        if ($data1['url'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网址不能为空')));
        }
        if ($data1['status'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网站状态不能为空')));
        }
        if ($data['footer'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '底部内容不能为空')));
        }
        if ($data['title'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网站标题不能为空')));
        }
        if ($data['description'] == '') {
			exit(json_encode(array('code' => 1, 'msg' => '网站描述不能为空')));
		}
        $res = DB::table('sub_sites')->where('id', $id)->update($data1);
        $res1 = DB::table('theme1_subsites')->where('sid', $id)->update($data);
        if (!($res1||$res)) {
            return json_encode(['code' => 1, 'msg' => "更新失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '更新成功']);
    }


    
}
