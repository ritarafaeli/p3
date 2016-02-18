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
        Log::info($request->input('birthday'));
        $isBirthday= $request->input('birthday') != null ? $request->input('birthday') : false;
        $isProfile= $request->input('profile') != null ? $request->input('profile') : false;

        //create random user array
        $randomUsers = array();


        //use 3rd party package to generate users
        $faker = Faker::create();
        foreach(range(1,$numUsers) as $i){
            $entry = array();
            array_push($entry, "Name: " . $faker->name);

            $birthday = $isBirthday ? "Birthday: " . $faker->dateTimeThisCentury->format("Y-M-d") : "Birthday: ";
            array_push($entry, $birthday);

            $profile = $isProfile ? "Profile: " . $faker->text : "Profile: ";
            array_push($entry, $profile);


            array_push($randomUsers, $entry);
        }
        return $randomUsers;
        //return view('randomuser')->with('randomUsers',$randomUsers);
    }
}
