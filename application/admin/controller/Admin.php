<?php
namespace app\admin\controller;
use Db;
use think\facade\Session;
use gmars\rbac\Rbac;

class Admin extends Common
{
    public function index()
    {
        return $this->fetch();
    }
    public function loginOut()
    {
        Session::delete('name');
        $this->success('退出成功', 'login/login');
    }
}