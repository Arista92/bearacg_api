<?php
/**
 * Created by PhpStorm.
 * User: korito-home
 * Date: 2019/6/20
 * Time: 16:50
 */

namespace App\Http\Controllers;


class ListController extends BaseController
{
    public function index()
    {
        return view('list.index');
    }
}