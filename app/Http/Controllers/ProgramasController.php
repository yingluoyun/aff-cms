<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProgramasController extends Controller
{
    //添加栏目
    public function addpro($mid){
        return view('home.addpro', ['mid' => $mid]);
    }
    public function addprograma1($mid)
    {
        return view('home.addprograma.addprograma1', ['mid' => $mid]);
    }
    public function addtoprograma1(Request $req)
    {   
        $data['type'] = $req->type;
        $data['rel'] = $req->rel;
        $data['mid'] = $req->mid;
        $data['lid'] = $req->lid;
        $data['name'] = $req->name;
        $data['url'] = $req->url;
        $data['status'] = $req->status;
        $data1['redirect'] = $req->redirect;
        $res = DB::table('programa')->insertGetId($data);
        $data1['pid'] = $res;
        if (!$res) {
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        $res1 = DB::table('programa_1')->insert($data1);
        if (!$res1) {
            DB::table('programa')->where('id', $res)->delete();
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '添加成功']);
    }
    
    public function addprograma2($mid)
    {
        return view('home.addprograma.addprograma2', ['mid' => $mid]);
    }
    public function addtoprograma2(Request $req)
    {
        $data['type'] = $req->type;
        $data['mid'] = $req->mid;
        $data['lid'] = $req->lid;
        $data['name'] = $req->name;
        $data['url'] = $req->url;
        $data['rel'] = $req->rel;
        $data1['title'] = $req->title;
        $data1['description'] = $req->description;
        $data1['content'] = $req->content;
        $data['status'] = $req->status;
        $res = DB::table('programa')->insertGetId($data);
        $data1['pid'] = $res;
        if (!$res) {
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        $res1 = DB::table('programa_2')->insert($data1);
        if (!$res1) {
            DB::table('programa')->where('id', $res)->delete();
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '添加成功']);
    }
    public function addprograma3($mid)
    {
        return view('home.addprograma.addprograma3', ['mid' => $mid]);
    }
    public function addtoprograma3(Request $req)
    {
        $data['type'] = $req->type;
        $data['mid'] = $req->mid;
        $data['lid'] = $req->lid;
        $data['name'] = $req->name;
        $data['url'] = $req->url;
        $data['rel'] = $req->rel;
        $data1['title'] = $req->title;
        $data1['description'] = $req->description;
        $data['status'] = $req->status;
        $res = DB::table('programa')->insertGetId($data);
        $data1['pid'] = $res;
        if (!$res) {
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        $res1 = DB::table('programa_3')->insert($data1);
        if (!$res1) {
            DB::table('programa')->where('id', $res)->delete();
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '添加成功']);
    }
    public function addprograma4($mid)
    {
        return view('home.addprograma.addprograma4', ['mid' => $mid]);
    }
    public function addtoprograma4(Request $req)
    {
        $data['type'] = $req->type;
        $data['mid'] = $req->mid;
        $data['lid'] = $req->lid;
        $data['name'] = $req->name;
        $data['url'] = $req->url;
        $data['rel'] = $req->rel;
        $data1['title'] = $req->title;
        $data1['description'] = $req->description;
        $data['status'] = $req->status;
        $res = DB::table('programa')->insertGetId($data);
        $data1['pid'] = $res;
        if (!$res) {
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        $res1 = DB::table('programa_4')->insert($data1);
        if (!$res1) {
            DB::table('programa')->where('id', $res)->delete();
            return json_encode(['code' => 1, 'msg' => "添加失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '添加成功']);
    }
    //编辑栏目1
    public function editprograma1(Request $req)
    {
        $id = $req->id;
        $res = DB::table('programa')->where('id', $id)->first();
        $res1 = DB::table('programa_1')->where('pid', $id)->first();
        return view('home.editprograma.editprograma1', ['data' => $res,'data1' => $res1]);
    }
    public function edittoprograma1(Request $req)
    {
        $id = $req->id;
        $data['mid'] = $req->mid;
        $data['rel'] = $req->rel;
        $data['lid'] = $req->lid;
        $data['name'] = $req->name;
        $data['url'] = $req->url;
        $data['status'] = $req->status;
        $data1['redirect'] = $req->redirect;
        $res = DB::table('programa')->where('id', $id)->update($data);
        $res1 = DB::table('programa_1')->where('pid', $id)->update($data1);
        if (!($res1||$res)) {
            return json_encode(['code' => 1, 'msg' => "更新失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '更新成功']);
    }
    //编辑栏目2
    public function editprograma2(Request $req)
    {
        $id = $req->id;
        $res = DB::table('programa')->where('id', $id)->first();
        $res1 = DB::table('programa_2')->where('pid', $id)->first();
        return view('home.editprograma.editprograma2', ['data' => $res,'data1' => $res1]);
    }
    public function edittoprograma2(Request $req)
    {
        $id = $req->id;
        $data['mid'] = $req->mid;
        $data['rel'] = $req->rel;
        $data['lid'] = $req->lid;
        $data['name'] = $req->name;
        $data['url'] = $req->url;
        $data['status'] = $req->status;
        $data1['title'] = $req->title;
        $data1['content'] = $req->content;
        $data1['description'] = $req->description;
        $res = DB::table('programa')->where('id', $id)->update($data);
        $res1 = DB::table('programa_2')->where('pid', $id)->update($data1);
        if (!($res1||$res)) {
            return json_encode(['code' => 1, 'msg' => "更新失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '更新成功']);
    }
     //编辑栏目3
     public function editprograma3(Request $req)
     {
         $id = $req->id;
         $res = DB::table('programa')->where('id', $id)->first();
         $res1 = DB::table('programa_3')->where('pid', $id)->first();
         return view('home.editprograma.editprograma3', ['data' => $res,'data1' => $res1]);
     }
     public function edittoprograma3(Request $req)
     {
         $id = $req->id;
         $data['mid'] = $req->mid;
         $data['rel'] = $req->rel;
         $data['lid'] = $req->lid;
         $data['name'] = $req->name;
         $data['url'] = $req->url;
         $data['status'] = $req->status;
         $data1['title'] = $req->title;
         $data1['description'] = $req->description;
         $res = DB::table('programa')->where('id', $id)->update($data);
         $res1 = DB::table('programa_3')->where('pid', $id)->update($data1);
         if (!($res1||$res)) {
             return json_encode(['code' => 1, 'msg' => "更新失败"]);
         }
         return json_encode(['code' => 0, 'msg' => '更新成功']);
     }
     //编辑栏目4
     public function editprograma4(Request $req)
     {
         $id = $req->id;
         $res = DB::table('programa')->where('id', $id)->first();
         $res1 = DB::table('programa_4')->where('pid', $id)->first();
         return view('home.editprograma.editprograma4', ['data' => $res,'data1' => $res1]);
     }
     public function edittoprograma4(Request $req)
     {
         $id = $req->id;
         $data['mid'] = $req->mid;
         $data['rel'] = $req->rel;
         $data['lid'] = $req->lid;
         $data['name'] = $req->name;
         $data['url'] = $req->url;
         $data['status'] = $req->status;
         $data1['title'] = $req->title;
         $data1['description'] = $req->description;
         $res = DB::table('programa')->where('id', $id)->update($data);
         $res1 = DB::table('programa_4')->where('pid', $id)->update($data1);
         if (!($res1||$res)) {
             return json_encode(['code' => 1, 'msg' => "更新失败"]);
         }
         return json_encode(['code' => 0, 'msg' => '更新成功']);
     }
    //栏目删除
    public function delprograma(Request $req)
    {   
        $type = $req->type;
        $id = $req->id;
        $res = DB::table('programa')->where('id', $id)->delete();
        if (!$res) {
            return json_encode(['code' => 1, 'msg' => "删除失败"]);
        }
        $res1 = DB::table("programa_$type")->where('pid', $id)->delete();
        if (!$res1) {
            return json_encode(['code' => 1, 'msg' => "删除失败"]);
        }
        return json_encode(['code' => 0, 'msg' => '删除成功']);
    }
}
