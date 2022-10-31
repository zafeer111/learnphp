<?php

class Mergedsorting{

        private $givenarray;

        function __construct(array $array){

        $this->givenarray = $array;

    }

public function arraydivide(){
        //array count
        $n = sizeof($this->givenarray);
        if($n<=1) return;
        //middle of array
        $middleindex = floor($n/2);
  for($i=0; $i<$middleindex; $i++){
if(($this->givenarray[$i])>($this->givenarray[$i++])){
    $leftsort = $this->givenarray[$i];
    $this->givenarray[$i] = $this->givenarray[$i++];
    $this->givenarray[$i++] = $leftsort;
    
}

  }
  return $leftsort;
}
    }
$Mergedsortingobj  = new Mergedsorting([9,3,5,7,0,1,4,2,10,6,8]);
var_dump([$Mergedsortingobj->arraydivide()]);
    
?>