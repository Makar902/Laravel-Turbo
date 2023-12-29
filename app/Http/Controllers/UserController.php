<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{
   public  function  checkLogin()
   {
       if (Auth::check())
       {
           return redirect()->route('shop');
       }
       else
       {
           return  redirect()->route('login')->with('status','You must login before visiting the shop');
       }
   }
}
