<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function about(){
        $data = [
            'name' => 'Zidan Farikhys Syifa',
            'address' => 'Purwokerto',
            'email' => 'zidanbinaris@gmail.com'
        ];
        return view('about', $data);
    }

}
