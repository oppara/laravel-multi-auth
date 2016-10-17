<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('member.home');
    }
}
