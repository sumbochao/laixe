<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index()
    {
        return $this->assign('', ['var' => 2]);
    }
}
