<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use p3\Http\Requests;
use p3\Http\Controllers\Controller;

use Illuminate\Contracts\Logging\Log;

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

        //create paragraphs array
        $paragraphs = array();

        //use 3rd party package to generate lorem ipsum paragraphs
        for($i=0 ; $i<$numParagraphs ; $i++) {
            $paragraph= array();
            $lipsum = \Lipsum::short()->text(1);
            $lipsum = trim(preg_replace('/\s+/', ' ', $lipsum)); //remove newlines
            $paragraph["paragraph"] = $lipsum;
            array_push($paragraphs, $paragraph);
        }

        return json_encode($paragraphs);
        //return view('loremipsum')->with('paragraphs',$paragraphs);
    }

    public function download(Request $request){

        //form validation on request object
        $this->validate($request, [
            'paragraphs' => 'required',
        ]);

        $paragraphs= $request->input('paragraphs');

        Excel::create('LipsumParagraphs', function($excel) use($paragraphs) {
            // Set the title
            $excel->setTitle('Lorem Ipsum Paragraphs');
            $excel->setDescription('Downloading the lorem ipsum paragraphs generated from p3.ritarafaeli.me');

            $excel->sheet('Paragraphs', function($sheet) use($paragraphs) {
                $sheet->fromArray($paragraphs);
            });
        })->download('csv');

    }
}
