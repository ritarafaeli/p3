<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;
use p3\Http\Controllers\Controller;

class RandomUserController extends Controller
{
    public function getUser(){
        return view('randomuser');
    }

    public function postFormInput(){

    }
}
