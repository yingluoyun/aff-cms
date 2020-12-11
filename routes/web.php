<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//前台首页
Route::get('/', 'IndexController@index');

Route::get('/index.html', 'IndexController@index');

Route::get('/blog.html', 'IndexController@getblog');

Route::get('/{programa}.html', 'IndexController@programa');

Route::get('/blog/{blog}.html', 'IndexController@blog');

Route::get('/site/{subsites}.html', 'IndexController@subsites');

//点赞
Route::get('/like', 'Admin@like');
//踩踏
Route::get('/dislike', 'Admin@dislike');

//后台登录、验证、退出、修改
Route::get('/login', 'AccountController@login')->name('login');
Route::post('/dologin', 'AccountController@dologin');
Route::middleware('auth')->group(function () {
    Route::get('/logout', 'AccountController@logout');
    Route::get('/change', 'AccountController@change');
    Route::post('/dochange', 'AccountController@dochange');
});
// 后台验证码
Route::get('/home/captcha', 'AccountController@captcha');

//后台相关
Route::middleware('auth')->group(function () {
    //后台主页
    Route::get('/home', 'Admin@home');
    Route::get('/welcome', 'Admin@welcome');

    //主站列表  主站相关
    Route::get('/mainsites', 'MainsitesController@mainsites');
    Route::get('/getmainsites', 'MainsitesController@getmainsites');
    //新建主站
    Route::view('/addsite', 'home.addsite');
    //新建主站主题1
    Route::view('/addmainsites1', 'home.theme1.addmainsites');
    Route::post('/addtomainsites1', 'MainsitesController@addtomainsites1');
    //编辑主站
    Route::get('/eidtmainsites1', 'MainsitesController@eidtmainsites1');
    Route::post('/eidtmainsites1save', 'MainsitesController@eidtmainsites1save');
    //删除主站
    Route::get('/delmainsites/{id}', 'MainsitesController@delmainsites');

    //子站列表  子站相关
    Route::get('/subsites', 'SubsitesController@subsites');
    Route::get('/getsubsites', 'SubsitesController@getsubsites');
    //新建子站
    Route::get('/addsub', 'SubsitesController@addsub');
    Route::get('/addsubsites1', 'SubsitesController@addsubsites1');
    Route::post('/addtosubsites1', 'SubsitesController@addtosubsites1');
    //删除子站
    Route::get('/delsubsites/{id}', 'SubsitesController@delsubsites');
    //编辑子站
    Route::get('/eidtsubsites1', 'SubsitesController@eidtsubsites1');
    Route::post('/eidtsubsites1save', 'SubsitesController@eidtsubsites1save');

    //文章列表  文章相关
    Route::get('/article', 'ArticlesController@article');
    Route::get('/getarticles', 'ArticlesController@getarticles');
    //添加文章
    Route::get('/addart', 'ArticlesController@addart');
    Route::get('/addarticle', 'ArticlesController@addarticle');
    Route::post('/addtoarticle', 'ArticlesController@addtoarticle');
    //删除文章
    Route::get('/delarticle/{id}', 'ArticlesController@delarticle');
    //修改文章
    Route::get('/eidtarticle', 'ArticlesController@eidtarticle');
    Route::post('/eidttoarticle', 'ArticlesController@eidttoarticle');

    //添加栏目 栏目相关
    Route::get('/addpro/{id}', 'ProgramasController@addpro');
    Route::get('/addprograma1/{id}', 'ProgramasController@addprograma1');
    Route::get('/addprograma2/{id}', 'ProgramasController@addprograma2');
    Route::get('/addprograma3/{id}', 'ProgramasController@addprograma3');
    Route::get('/addprograma4/{id}', 'ProgramasController@addprograma4');
    Route::post('/addtoprograma1', 'ProgramasController@addtoprograma1');
    Route::post('/addtoprograma2', 'ProgramasController@addtoprograma2');
    Route::post('/addtoprograma3', 'ProgramasController@addtoprograma3');
    Route::post('/addtoprograma4', 'ProgramasController@addtoprograma4');
    //编辑栏目
    Route::get('/editprograma1', 'ProgramasController@editprograma1');
    Route::post('/edittoprograma1', 'ProgramasController@edittoprograma1');
    Route::get('/editprograma2', 'ProgramasController@editprograma2');
    Route::post('/edittoprograma2', 'ProgramasController@edittoprograma2');
    Route::get('/editprograma3', 'ProgramasController@editprograma3');
    Route::post('/edittoprograma3', 'ProgramasController@edittoprograma3');
    Route::get('/editprograma4', 'ProgramasController@editprograma4');
    Route::post('/edittoprograma4', 'ProgramasController@edittoprograma4');
    //删除栏目
    Route::get('/delprograma', 'ProgramasController@delprograma');

    //上传图片接口
    Route::post('/upload_img', 'Admin@upload_img');
     
});
