<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;
use p3\Http\Controllers\Controller;

class LoremIpsumController extends Controller
{
    public function getText(){
        return view('loremipsum');
    }

    public function postFormInput(){

    }
}
