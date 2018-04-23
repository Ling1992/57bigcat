<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    // ssdb  client 缓存队列使用
//    protected $ssdb;

    function index()
    {
        return view('index');
    }

    function content()
    {

    }

}
