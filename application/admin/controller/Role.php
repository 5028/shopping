<?php
namespace app\admin\controller;
use Db;
use Request;
use think\facade\Session;
use gmars\rbac\Rbac;

class Role extends Common
{
	public function role()
    {
        return $this->fetch();
    }
    public function role_add()
    {
        return $this->fetch();
    }


}