<?php

      $scourse = array("PHP", "Joomla", "Zend Framword", "JQuery");

      echo "<pre>";
      print_r ($scourse);
      echo "</pre>";
////xóa phần tử đầu tiêm
      echo $lastItem = array_shift($scourse);
      echo "<pre>";
      print_r ($scourse);
      echo "</pre>";
      
     