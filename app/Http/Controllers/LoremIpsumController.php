<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;

use p3\Http\Requests;
use p3\Http\Controllers\Controller;

use Magyarjeti\LaravelLipsum;

class LoremIpsumController extends Controller
{
    public function getText(){
        return view('loremipsum');
    }

    public function postFormInput(Request $request){

        $numParagraphs = $request->input('numParagraphs');

        //TODO: add some validation later

        return \Lipsum::short()->text($numParagraphs);


    }
}
