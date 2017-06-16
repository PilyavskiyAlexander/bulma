<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function save(Request $request)
    {
        session()->put('lang', $request->language);

        return redirect()->back();
    }

}
