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

    public function postFormInput(Request $request){

        //form validation on request object
        $this->validate($request, [
            'numParagraphs' => 'required|integer|min:1|max:100',
        ]);

        //retrieve form input
        $numParagraphs = $request->input('numParagraphs');

        //use 3rd party package to generate lorem ipsum paragraphs
        for($i=0 ; $i<$numParagraphs ; $i++) {
            $paragraphs[$i] = \Lipsum::short()->text(1);
        }

        return $paragraphs;
        //return Response::json($paragraphs); //not sure how to get this to work
        //return view('loremipsum')->with('paragraphs',$paragraphs);
    }
}
