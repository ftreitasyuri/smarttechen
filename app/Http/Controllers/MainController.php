<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function home(){
        return view('home');
    }

    public function quemSomos(){
        return view('quemSomos');
    }

    public function dev(){
        return view('dev');
    }

    public function automacao(){
        return view('automacao');
    }

    public function homeAutomate(){
        return view('homeAutomate');
    }
}
