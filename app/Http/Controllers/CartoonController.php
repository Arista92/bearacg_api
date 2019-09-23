<?php
/**
 * Created by PhpStorm.
 * User: korito-home
 * Date: 2019/6/14
 * Time: 23:38
 */

namespace App\Http\Controllers;


class CartoonController extends BaseController
{
    public function detail($id)
    {
        return view('cartoon.detail');
    }

}