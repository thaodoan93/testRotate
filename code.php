<?php
  function rotLeft(int $a , $d) {
    if($a == 0) {
      return [];
    }
    if($d > $a) {
      $d = $d % $a;
    }
    $numList = [];
    for ($i=1; $i<=$a; $i++) {
      if ($i + $d <= $a) {
        $numList[$i-1] = $i + $d;
      } else {
        $numList[$i-1] = $i + $d - $a;
      }
    }
    echo implode(' ', $numList);
  }
  
  
  rotLeft(5, 4);
  //rotLeft(5, 5);
  //rotLeft(5, 6);
  //rotLeft(5, 0);
  //rotLeft(0, 1);
  
?>
