<?php
  function rotLeft(int $n , $d) {
    if($n == 0) {
      return [];
    }
    if($d > $n) {
      $d = $d % $n;
    }
    $numList = [];
    for ($i=1; $i<=$n; $i++) {
      if ($i + $d <= $n) {
        $numList[$i-1] = $i + $d;
      } else {
        $numList[$i-1] = $i + $d - $n;
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
