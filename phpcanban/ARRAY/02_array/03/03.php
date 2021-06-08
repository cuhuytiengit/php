<?php
    $scourses = array("php" => "PHP","zend" =>"zend Framework","joomla" => "joomla","0" => "item1","1" => "item1");
    echo "<pre>";
    print_r($scourses);
    echo "</pre>";
    // Array
    // (
    //     [php] => PHP
    //     [zend] => zend Framework
    //     [joomla] => joomla
    //     [0] => item1
    //     [1] => item1
    // )
    if(!empty($scourses)){
    foreach($scourses as $key => $value){
            echo $key .":". $value ."<br/>";
    }
}

