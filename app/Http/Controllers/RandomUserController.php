<?php

namespace p3\Http\Controllers;

use Faker\Factory as Faker;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use p3\Http\Requests;
use p3\Http\Controllers\Controller;

use Log;
class RandomUserController extends Controller
{
    public function getUser(){
        return view('randomuser');
    }

    public function postFormInput(Request $request){

        //form validation on request object
        $this->validate($request, [
            'num' => 'required|integer', //specifies number of users to generate
        ]);

        //retrieve form input
        $numUsers= $request->input('num');
        $isBirthday= $request->input('birthday') != null ? $request->input('birthday') : false;
        $isProfile= $request->input('profile') != null ? $request->input('profile') : false;

        //create random user array
        $randomUsers = array();

        //use 3rd party package to generate users
        $faker = Faker::create();

        //for each user, create an area, add value, based on user form input, and add array to array of users
        foreach(range(1,$numUsers) as $i){
            $user= array();
            $user["name"] = $faker->name;
            $user["birthday"] = $isBirthday ? $faker->dateTimeThisCentury->format("Y-M-d") : "";
            $user["profile"] = $isProfile ? $faker->text : "";

            array_push($randomUsers, $user);
        }

       //encode the array into json and return
        return json_encode($randomUsers);

        //return view('randomuser')->with('randomUsers',$randomUsers);
    }
}
