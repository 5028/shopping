<?php
namespace app\admin\controller;
use Db;
use think\Controller;

class Login extends Controller
{
	public function index()
    {
        return $this->fetch('index/index');
    }
    public function login()
    {
        return $this->fetch('login/login');
    }
    public function check_login()
    {
        $name = input('get.name');
        $pwd = input('get.password');
        $code = input('get.code');
        $arr = Db::table('user')->where('Name', $name)->where('Password', $pwd)->find();
        if (empty($arr)) {
            die;
        } else {
            $captcha = new \think\captcha\Captcha();
            if (!$captcha->check($code)) {
                echo "error";
            } else {
                $id = $arr['id'];
                $name = $arr['Name'];
                session('id', $id);
                session('Name', $name);
                echo "ok";
            }
        }
    }
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}