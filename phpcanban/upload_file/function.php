<?php

        ///check file size
        function checkSize($size, $min, $max ){
            $flag = false;
            if($size >= $min && $size <= $max)$flag = true;
            return $flag;
        }

        //check file extentions
        function checkExtension($filename, $arrExtension ){
            $ext = pathinfo($filename, PASSWORD_DEFAULT);
            echo '<pre>';
            print_r($arrExtension);
            echo '<pre>';
        }