<?php

class Mergedsorting{

        private $givenarray;

        function __construct(array $array){

        $this->givenarray = $array;

    }

public function arraydivide(){
        //array count
        $n = sizeof($this->givenarray);
        //middle of array
        $middleindex = floor($n/2);
        //     $lastindex = $n-1;
        $left = array_slice($this->givenarray, 0, $middleindex);
        $right = array_slice($this->givenarray, $middleindex, $n);
        
        $mergearray = array_merge($left,$right);
        return $mergearray;
            }
            }



$Mergedsortingobj  = new Mergedsorting([9,3,5,7,0,1,4,2,10,6,8]);
var_dump([$Mergedsortingobj->arraydivide()]);

?>