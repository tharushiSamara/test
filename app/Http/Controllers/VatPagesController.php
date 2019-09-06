<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VatPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('vat');
    }

    public function buisness()
    {
        return view('vat.buisness');
    }

    public function industrial()
    {
        return view('vat.industrial');
    }
}