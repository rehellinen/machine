<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 2018/2/21
 * Time: 22:26
 */

namespace app\index\controller;


use think\Controller;

class Beng extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}