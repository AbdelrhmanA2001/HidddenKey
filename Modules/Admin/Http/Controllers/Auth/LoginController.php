<?php

namespace Modules\Admin\Http\Controllers\Auth;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function loginView()
    {
        return view('admin::auth.login');
    }


    public function login(LoginRequest $r)
    {
        if (auth()->guard('admin')->attempt($r->only('email', 'password'))) {
            // dd(auth()->guard('admin')->user());
            return redirect()->route('dashboard.home');
        } else {
            return back()->withInput($r->only('email', 'remember'));
        }
    }


    public function logout()
    {
      Auth::guard('admin')->logout();
      return redirect()->route('login.view');
    }
}
