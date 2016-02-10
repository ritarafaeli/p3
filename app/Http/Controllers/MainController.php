<?php

namespace p3\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MainController extends Controller
{
    public function index(){
        /*$items = array('items' =>
            ['test1', 'test2', 'test3']
        );
        //dd($items);
        \Log::debug($items);*/
        return view('welcome');
    }
}
