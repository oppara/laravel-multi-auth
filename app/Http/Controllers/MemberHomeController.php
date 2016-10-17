<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MemberHomeController extends Controller
{
    public function index()
    {
        return view('member.home');
    }
}
