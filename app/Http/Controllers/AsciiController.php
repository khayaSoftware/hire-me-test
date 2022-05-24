<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AsciiController extends Controller
{
    public function _construct(){

    }

    public function index()
    {
        // array of unrandomized chars
        $arrayToBeReturned = array();

        // holds randommized chars
        $shuffledArray = array();

        // randomized chars with missing characters
        $arrayWithMisingCharacter = array();

        // generate chars
        $index = 0;
        for ($i=44; $i <= 124; $i++) { 
            $arrayToBeReturned[$index] = html_entity_decode('&#'.$i.';');
            $index++;
        }

        //shuffle array
        $shuffledArray = $arrayToBeReturned;
        shuffle($shuffledArray);

        // remove random character
        $arrayWithMisingCharacter = $shuffledArray;
        unset($arrayWithMisingCharacter[rand(0,$index)]);

        //get character difference
        $differenceArray=array_diff($shuffledArray,$arrayWithMisingCharacter);

        // return to be presented in view
        $data = [
            'randomArray'  => $shuffledArray,
            'randomArrayMissingChar'   => $arrayWithMisingCharacter,
            'removedResult' => current($differenceArray)
        ];
        
        return view('asciigenerator', ["data"=>$data]);
    }

}
