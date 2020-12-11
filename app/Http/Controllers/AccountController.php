<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
	//后台登录
	public function login()
	{
		if (Auth::check()) {
			echo "<script>alert('您已经登录啦，请不要重复登录哦！');window.location.href='/home'</script>";
		}
		return view('home.login');
	}
	//后台登录验证
	public function dologin(Request $req)
	{
		$username = $req->username;
		$password = $req->password;
		$VeriCode = $req->vericode;
		session_start();
		$sess_code = $_SESSION['code'];
		if (strtolower($VeriCode) != strtolower($sess_code)) {
			exit(json_encode(array('code' => 1, 'msg' => '验证码错误啦')));
		}
		// 查询数据库，校验用户名和密码
		if ($username == '') {
			exit(json_encode(array('code' => 1, 'msg' => '用户名不能为空')));
		}
		if ($password == '') {
			exit(json_encode(array('code' => 1, 'msg' => '密码不能为空')));
		}
		$res = Auth::attempt(['username' => $username, 'password' => $password]);
		if (!$res) {
			return json_encode(['code' => 1, 'msg' => "登录失败，账户或密码错误"]);
		}
		return json_encode(['code' => 0, 'msg' => '登录成功']);
	}


	//后台修改页面

	public function change()
	{
		return view('home.change');
	}

	//后台修改信息
	public function dochange(Request $req)
	{
		$username = $req->username1;
		$password = $req->password1;
		$data['username'] = $req->username2;
		$data['password'] = password_hash($req->password2, PASSWORD_DEFAULT);
		$res = Auth::attempt(['username' => $username, 'password' => $password]);
		if (!$res) {
			return json_encode(['code' => 1, 'msg' => "修改失败，账户或密码错误"]);
		}
		$re = DB::table('user')->where('username', $username)->update($data);
		if (!$re) {
			return json_encode(['code' => 1, 'msg' => "修改失败！"]);
		}
		return json_encode(['code' => 0, 'msg' => '修改成功']);
	}

	//后台退出
	public function logout()
	{
		Auth::logout();
		return json_encode(array('code' => 0, 'msg' => '退出登录成功'));
		// echo "<script>alert('退出登录成功！');window.location.href='/home'</script>";
	}

	// 验证码
	public function captcha()
	{
		VeriCode::create();
	}
}


/**
 * 验证码类
 */
class VeriCode
{
	// 获取验证码配置
	private static function _getCodeConfig()
	{
		return  [
			// 验证码字符集
			'codeStr' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',
			// 验证码个数
			'codeCount' => 4,
			// 字体大小
			'fontsize' => 16,
			// 验证码的宽度
			'width' => 100,
			// 验证码高度
			'height' => 36,
			// 是否有干扰点?true有,false没有
			'disturbPoint' => true,
			// 干扰点个数,disturbPoint开启后生效
			'pointCount' => 200,
			// 是否有干扰条?true有,false没有
			'disturbLine' => true,
			// 干扰条个数,disturbLine开启后生效
			'lineCount' => 3
		];
	}

	// 创建图片验证码
	public static function create()
	{
		// 配置
		$config = self::_getCodeConfig();

		//创建画布
		$image = imagecreatetruecolor($config['width'], $config['height']);
		//背景颜色
		$bgcolor = imagecolorallocate($image, 255, 255, 255);
		imagefill($image, 0, 0, $bgcolor);
		$captch_code = ''; //存储验证码
		$captchCodeArr = str_split($config['codeStr']);

		//随机选取4个候选字符
		for ($i = 0; $i < $config['codeCount']; $i++) {
			$fontsize = $config['fontsize'];
			$fontcolor = imagecolorallocate($image, rand(0, 120), rand(0, 120), rand(0, 120)); //随机颜色
			$fontcontent = $captchCodeArr[rand(0, strlen($config['codeStr']) - 1)];
			$captch_code .= $fontcontent;
			$_x = $config['width'] / $config['codeCount'];
			$x = ($i * (int)$_x) + rand(5, 10);   //随机坐标
			$y = rand(5, 10);
			imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor);	// 水平地画一行字符串
		}
		session_start();
		$_SESSION['code'] = $captch_code;
		//增加干扰点
		if ($config['disturbPoint']) {
			for ($i = 0; $i < $config['pointCount']; $i++) {
				$pointcolor = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));
				imagesetpixel($image, rand(1, 99), rand(1, 29), $pointcolor);
			}
		}

		//增加干扰线
		if ($config['disturbLine']) {
			for ($i = 0; $i < $config['lineCount']; $i++) {
				$linecolor = imagecolorallocate($image, rand(80, 280), rand(80, 220), rand(80, 220));
				imageline($image, rand(1, 99), rand(1, 29), rand(1, 99), rand(1, 29), $linecolor);
			}
		}

		//输出格式
		header('content-type:image/png');
		imagepng($image);

		//销毁图片
		imagedestroy($image);
	}
}
