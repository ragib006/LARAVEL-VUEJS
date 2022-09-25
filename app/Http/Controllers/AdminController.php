<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use DB;



use DateTime;
use Cart;
Use Image;
use Session;
session_start();

class AdminController extends Controller
{


public function dashboard(){


return view('vuetemplatesetup.vue-template');


}



}
