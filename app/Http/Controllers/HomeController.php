<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends BaseController
{
    public function index()
    {
        $posts = \App\Post::all(); // using the 'foo-bar' connection
        //$year = Carbon::now('Asia/Ho_Chi_Minh');
        //return $this->assign('year', $year);
        var_dump($posts);
    }
}
