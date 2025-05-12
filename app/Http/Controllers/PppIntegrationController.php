<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PppIntegrationController extends Controller
{
    public function index(){
        return view('user.ppp-registration');
    }
}
