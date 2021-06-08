<?php

      $scourse = array("PHP", "Joomla", "Zend Framword", "JQuery");

      echo "<pre>";
      print_r ($scourse);
      echo "</pre>";
    //phaanf tử cuối bị xóa bỏ
    
      echo $lastItem = array_pop($scourse);
      echo "<pre>";
      print_r ($scourse);
      echo "</pre>";
      
     