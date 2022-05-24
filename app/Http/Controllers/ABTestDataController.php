<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exads\ABTestData;
use Exception;

class ABTestDataController extends Controller
{
    private $selectedDesigns = array();
    public function _construct()
    {
    }

    public function index()
    {
        $this->getPromotions();
    }

    private function getPromotions(){
        $i=1;
        // Loop until promotion ID is incorrect, I didn't get a range of IDs etc..
        while (true) {
            try {
                $abTest = new ABTestData($i);
                $designs = $abTest->getAllDesigns();
                
                // echo "<pre>";
                // var_dump($designs);
                // echo "</pre>";

                //Loop through designs
                foreach($designs as $design){
                    if($this->selectedDesign($design)){
                        array_push($this->selectedDesigns,$design);
                    }
                }
                $i++;
            } 
            // When the promotion ID is invalid, I used a finally but it was throwing an error when the try block wasn't running.
            catch (Exception $e) {
                $this->getMaxSplitPercent();
            }
        }
    }

    // Get max split of selected designs
    private function getMaxSplitPercent(){
        $indexOfMaxSplitPercent = 0;
        for($j = 1; $j <= count($this->selectedDesigns); $j++){
            if(!empty($this->selectedDesigns[$j])){
                if($this->selectedDesigns[$indexOfMaxSplitPercent]['splitPercent'] < $this->selectedDesigns[$j]['splitPercent']){
                    $indexOfMaxSplitPercent = $j;
                }
            }
        }
        echo "<pre>";
        var_dump($this->selectedDesigns[$indexOfMaxSplitPercent]);
        echo "</pre>"; 
        die;
    }

    // Select designs to be filtered by max
    private function selectedDesign($design){
        $chance = $design['splitPercent'];
        if ($this->percentChance($chance)) {
            return true;
        }
        return false;
    }

    // Select design by percent
    private function percentChance($chance)
    {
        $randPercent = mt_rand(0, 99);
        return $chance > $randPercent;
    }
}
