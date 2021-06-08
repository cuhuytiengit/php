<html>
    <head>
        <meta http-equiv="Content-type" content="text/html"; charset="UTF-8">
        <title>insert title</title>
        <link rel = "stylesheet" type="text/css" href="styleHam.css"/>
    </head>

    <body>
        <div class="content">
            <?php
            function createBox($content, $width = 150, $height =50){
                $result = '<div style="width:'.$width.'px; height:'.$height.'px;">';
                $result .=  '<p>'.$content.'<span>(200x50)</span></p>';
                $result .='</div>';
                return $result;
            }
          
           echo $result;
      ?>
    
        
          
        </div>
    </body>
</html>