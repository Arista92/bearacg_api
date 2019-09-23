<?php
/**
 * Created by PhpStorm.
 * User: korito-home
 * Date: 2019/6/27
 * Time: 13:48
 */

namespace App\Http\Controllers;


class FindController extends BaseController
{
    public function index($type)
    {
        return view('find.index',['type'=>$type]);
    }
}