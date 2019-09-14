<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayerController extends Controller
{
    public function payer(){
        return view('VAT_Payer.payerDashboard');
    }

    public function register(){
        return view('VAT_Payer.registerPayer');
    }
}
