<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function save(Request $request)
    {
//        $replace = $request->language.'.';
//        $search = $request->subdomain.'.';

        session()->put('lang', $request->language);

        app()->setLocale($request->language);

        return redirect($request->route);
    }

}
