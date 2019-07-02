<?php
namespace app\admin\controller;
use Db;
use Request;
use think\facade\Session;
use gmars\rbac\Rbac;
use app\admin\model\Brand as Brand_Model;

class Brand extends Common
{
    public function brand()
    {
        return $this->fetch();
    }
    public function brand_add()
    {
    	$name=Request::post('name');
    	$brand = new Brand_Model;
    	$brand->name = $name;
    	$brand->save();
    }
    public function show()
    {
    	$brand = new Brand_Model;
    	$obj=$brand->select();
    	$arr=json_decode($obj,true);
    	$res=['code'=>'0','status'=>'ok','data'=>$arr];
    	echo $json=json_encode($res);
    }
}