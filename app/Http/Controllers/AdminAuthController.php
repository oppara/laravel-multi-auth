<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class AdminAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $guard = 'admin';
    protected $redirectTo = '/admin/home';

    protected $redirectAfterLogout = 'admin/login';

    protected $username = 'email';

    protected $maxLoginAttempts = 5;
    protected $lockoutTime = 60;


    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function getGuard()
    {
        return $this->guard;
    }

    protected function guard()
    {
        return Auth::guard($this->getGuard());
    }


}
