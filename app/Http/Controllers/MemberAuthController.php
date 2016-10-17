<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class MemberAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $guard = 'member';
    protected $redirectTo = '/member';

    protected $username = 'email';

    protected $maxLoginAttempts = 5;
    protected $lockoutTime = 60;


    public function showLoginForm()
    {
        return view('member.login');
    }

    /**
     * Log the user out of the application.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/member/login');
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
