<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    public function changeLanguage($locale)
    {
        Session::put('locale', $locale);    //changing locale (si|en)
        return redirect()->back();
    }
}
