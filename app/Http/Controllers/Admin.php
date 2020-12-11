<?php

namespace App\Http\Controllers;

use App\aaaModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;
use PhpParser\Node\Expr\Print_;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\FuncCall;

class Admin extends Controller
{
    //后台
    public function home()
    {
        return view('home.home');
    }
    //后台首页
    public function welcome()
    {
        $data['main_sites'] = DB::table('main_sites')->get()->count();
        $data['sub_sites'] = DB::table('sub_sites')->get()->count();
        $data['article_list'] = DB::table('article_list')->get()->count();
        $data['visit'] = DB::table('visit')->where('id',1)->value('num');
        return view('home.welcome', $data);
    }
   //后台上传图片接口
    public function upload_img(Request $req)
    {
        // $res = $_FILES['file'];
        $path = $req->file('file')->store('/public/upload/image/' . date('Ymd'));
        $url = Storage::url($path);
        exit(json_encode(array('code' => 0, 'msg' => 'success', 'data' => array('src' => $url))));
    }

    //点赞
    public function like(){
        $req = $_SERVER['HTTP_REFERER'];
        $arr = explode("/",$req);
        $url = "/".$arr[4];
        $res = DB::table('article_list')->where('url',$url)->increment('like');
        if (!$res) {
            return json_encode(['code' => 1, 'msg' => "Like faied"]);
        }
        return json_encode(['code' => 0, 'msg' => 'Like successfully']);
    }
    //点赞
    public function dislike(){
        $req = $_SERVER['HTTP_REFERER'];
        $arr = explode("/",$req);
        $url = "/".$arr[4];
        $res = DB::table('article_list')->where('url',$url)->increment('dislike');
        if (!$res) {
            return json_encode(['code' => 1, 'msg' => "Dislike faied"]);
        }
        return json_encode(['code' => 0, 'msg' => 'Dislike successfully']);
    }
   
    
}
