<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends BaseController
{
    public function index()
    {
        $year = Carbon::now('Asia/Ho_Chi_Minh');
        return $this->assign('year', $year);
    }
}
