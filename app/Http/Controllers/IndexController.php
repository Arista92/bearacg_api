<?php
/**
 * Created by PhpStorm.
 * User: korito-home
 * Date: 2019/6/11
 * Time: 0:51
 */

namespace App\Http\Controllers;


class IndexController
{
    public function index()
    {

        return view('index.index',['bbb'=>3]);
    }
}