<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PrimeNumberController extends Controller
{
    public function _construct(){

    }

    public function index()
    {
        return view('primenumber');
    }

    // return range marked with prime numbers
    public function primeNumbersRange(){
        $primeNumbers = "";

        if(isset($_POST)&&!empty($_POST)){
            $beginning = $_POST["beginning"];
            $end = $_POST["end"];
            while($beginning <= $end){
                if($this->isPrime($beginning)){
                    $primeNumbers .= $beginning . " [PRIME]<br/>";
                }
                else{
                    $primeNumbers .= $beginning . "<br/>";
                }
                $beginning++;
            }
            exit($primeNumbers);
        }

    }

    // check if current number is a prime number
    private function isPrime($noToCheck){
        if($noToCheck == 1){
            return false;
        }
    
        for($i = 2; $i <= $noToCheck/2; $i++){
            if($noToCheck % $i == 0){
                return false;
            }
        }
        return true;
    }
}
