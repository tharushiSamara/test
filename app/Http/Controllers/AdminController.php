<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'=>'verified']);  //checking for email verification
        $this->middleware('admin');               //allow if user is admin
    }

    public function manageEmployee()
    {
        $employees = User::all()->where('role', 'employee');   //get all employees details
        return view('admin.manageEmployee', ['employees'=>$employees]);
    }

    public function employeeProfile($id)
    {
        $employee = User::where('id', $id)->firstOrFail();      //returning paticular user's data
        return view('profile.employeeProfile', ['employee'=>$employee]);
    }
}