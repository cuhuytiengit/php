<?php
    // 18 = 1+ 8 =9
    function sumDiGit($number){
   
    $sum =0;
    while($number > 0){
        $digit = $number %10;
        $sum += $digit;
        $number = ($number- $digit)/10;
    }
    return $sum;

    }

 
?>