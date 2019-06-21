<?php
namespace app\admin\controller;
use Db;
use think\facade\Session;
class Admin extends Common
{
    public function index()
    {
        return $this->fetch('index/index');
    }
    public function loginOut()
    {
        Session::delete('name');
        // $this->success('login');
        return $this->fetch('login/login');
    }
}