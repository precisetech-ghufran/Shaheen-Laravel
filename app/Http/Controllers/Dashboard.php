<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\model\User;
class Dashboard extends Controller
{


public function index(){


$auth_user = Auth::user();
    return view('admin.index',compact('auth_user'));

}
  
}// end of main class
