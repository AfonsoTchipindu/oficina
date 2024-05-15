<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecretarioController extends Controller
{
    public function dashboard(){
        return view('secretaria/dashboard');
    }
}
