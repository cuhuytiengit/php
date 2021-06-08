<html>
    <head>
        <meta http-equiv="Content-type" content="text/html"; charset="UTF-8">
        <title>insert title</title>
        <link rel = "stylesheet" type="text/css" href="styleHam.css"/>
    </head>

    <body>
        <div class="content">
            <?php
            $value ="ABC";
            function createBox($content, $width = 150, $height =50){
                $result = '<div style="width:'.$width.'px; height:'.$height.'px;">';
                $result .=  '<p>'.$content.'<span>(200x50)</span></p>';
                $result .='</div>';
                //cach1
                //global $value;
                //echo $value;

                //cach 2
                echo $GLOBALS["value"];
                return $result;
            }
            $BoxA = createBox("Box A");
          echo $BoxA;
      ?> 
        </div>
    </body>
</html>
<?php

   echo $value;