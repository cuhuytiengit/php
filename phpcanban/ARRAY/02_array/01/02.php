<?php
    $scourses =array();
    $scourses[] = "PHP";
    $scourses[] = "zend Framework";
    $scourses[] = "joomla";

    $lenght = count($scourses);
    echo $lenght;
    //c1:lenght
   // if($lenght >0){
     //   echo "khong phai la mang rong";
    //}else{
     //   echo "mang rong";
    //}
    //c2 : empty
    if(!empty($scourses)){
        echo "khong phai la mang rong";
    }else{
        echo "mang rong";
    }