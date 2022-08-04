<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LangController extends Controller
{

    public function lang($lang, Request $request)
    {
        $acceptedLangs = ['en', 'ar'];

        if (!in_array($lang, $acceptedLangs)) {
            $lang = 'ar';
        }
        \App::setLocale($lang);


        return back();
    }
}
