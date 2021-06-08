<?php

    //c3
    $scourse  = array("PHP", "zend frameword", "joomla");
   echo "<pre>";
   print_r($scourse);
   echo "<pre>";

    if(!empty($scourse)){
      foreach($scourse as $key => $value){
        echo $value . "<br/>";
    }
  }
  // Array
  // (
  //     [0] => PHP
  //     [1] => zend frameword
  //     [2] => joomla
  // )

  ?>