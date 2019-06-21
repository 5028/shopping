<?php
namespace app\admin\controller;
use Db;
class Admin
{
    public function index()
    {
        return $this->fetch('index/index');
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}