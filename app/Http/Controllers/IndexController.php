<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public static function getdata()
    {
        //获取访问网址
        $url =  $_SERVER['HTTP_HOST'];
        //通过网址查询是哪个主站
        $data['msite'] = DB::table('main_sites')->where('url', $url)->first();
        //查不到返回404
        if (!$data['msite']) {
            return abort(404);
        }
        //获取主站详细信息
        $mid = $data['msite']->id;
        $data['sites'] = DB::table('sub_sites')->where([['status', 0], ['mid', $mid]])->get();
        //随机获取4篇文章
        $data['article'] = DB::table('article_list')->where([['status', 0], ['mid', $mid]])->orderByRaw("RAND()")->limit(4)->get();
        //获取栏目列表
        $data['programa1'] = DB::table('programa')->where([['status', 0], ['mid', $mid]])->orderBy('lid')->offset(0)->limit(1)->get();
        $data['programa2'] = DB::table('programa')->where([['status', 0], ['mid', $mid]])->orderBy('lid')->offset(1)->limit(1)->get();
        $data['programa3'] = DB::table('programa')->where([['status', 0], ['mid', $mid]])->orderBy('lid')->offset(2)->limit(9)->get();
        //访问量+1
        $num = DB::table('visit')->where('id', 1)->value('num');
        $num++;
        DB::table('visit')->where('id', 1)->update(['num' => $num]);
        return $data;
    }

    public function index()
    {
        // return redirect('https://www.cnblogs.com/bndong/p/9035848.html');
        $data = $this->getdata();
        $id = $data['msite']->id;
        $data['site'] = DB::table('theme1_mainsites')->where('mid', $id)->first();
        if ($data['msite']->status == 1) {
            return abort(404);
        }
        if ($data['msite']->theme) {
            $id = $data['msite']->theme;
            return view("theme$id.index", $data);
        } else {
            return abort(404);
        }
    }

    public function getblog()
    {
        $pro = "/blog.html";
        $data = $this::getdata();
        $id = $data['msite']->id;
        $data['site'] = DB::table('theme1_mainsites')->where('mid', $id)->first();
        $mid = $data['msite']->id;
        $data['article1'] = DB::table('article_list')->where([['status', 0], ['mid', $mid]])->orderBy('id','DESC')->get();
        $data['programa'] = DB::table('programa')->where([['url', $pro], ['mid', $mid]])->first();
        $pid = $data['programa']->id;
        $data['programablog'] = DB::table('programa_3')->where('pid', $pid)->first();

        if ($data['msite']->theme) {
            $id = $data['msite']->theme;
            return view("theme$id.blogs", $data);
        } else {
            return abort(404);
        }
    }

    public function blog($blog)
    {
        $pro = "/" . $blog . ".html";
        $data = $this->getdata();
        $mid = $data['msite']->id;
        $id = $data['msite']->id;
        $data['site'] = DB::table('theme1_mainsites')->where('mid', $id)->first();
        $data['blog'] = DB::table('article_list')->where([['url', $pro], ['mid', $mid]])->first();
        $aid = $data['blog']->id;
        $data['blog1'] = DB::table('articles')->where('aid', $aid)->first();
        if ($data['blog']) {
            $id = $data['msite']->theme;
            $res = DB::table('article_list')->where('url', $pro)->increment('view');
            return view("theme$id.blog", $data);
        }
        return abort(404);
    }

    public function subsites($subsites)
    {
        $pro = "/" . $subsites . ".html";
        $data = $this->getdata();
        $mid = $data['msite']->id;
        $id = $data['msite']->id;
        $data['site'] = DB::table('theme1_mainsites')->where('mid', $id)->first();
        $data['subsites1'] = DB::table('sub_sites')->where([['url', $pro], ['mid', $mid]])->first();
        $sid = $data['subsites1']->id;
        $data['subsites'] = DB::table('theme1_subsites')->where('sid', $sid)->first();
        if ($data['subsites']) {
            $id = $data['msite']->theme;
            return view("theme$id.subindex", $data);
        }
        return abort(404);
    }


    public function programa($programa)
    {
        $pro = "/" . $programa . ".html";
        $data = $this->getdata();
        $mid = $data['msite']->id;
        $id = $data['msite']->id;
        $data['programa'] = DB::table('programa')->where([['url', $pro], ['mid', $mid]])->first();
        $pid = $data['programa']->id;
        $type = $data['programa']->type;
        $data['programa_2'] = DB::table('programa_2')->where('pid', $pid)->first();
        $data['site'] = DB::table('theme1_mainsites')->where('mid', $id)->first();
        switch ($type) {
            case 1:
                $url = DB::table('programa_1')->where('pid', $pid)->value('redirect');
                return redirect($url);
                break;
            case 2:
                $id = $data['msite']->theme;
                return view("theme$id.programa", $data);
                break;
            default:
            return abort(404);
        }
       
        return abort(404);
    }
}
