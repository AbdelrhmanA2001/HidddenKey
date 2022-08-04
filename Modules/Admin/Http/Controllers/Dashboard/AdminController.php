<?php

namespace Modules\Admin\Http\Controllers\Dashboard;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin::dashboard.dashboard');
    }
}

