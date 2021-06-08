<html>
    <head>
        <meta http-equiv="Content-type" content="text/html"; charset="UTF-8">
        <title>insert title</title>
        <link rel = "stylesheet" type="text/css" href="styleHam.css"/>
    </head>

    <body>
        <div class="content">
            <?php
            function createBox(){
                $value =  '<div style="width: 200px; height: 50px;">';
                $value .=  ' <p>BoxA <span>(200x50)</span></p>';
                $value .='</div>';
                return $value;
            }
            $result =createBox();
            echo $result;
           
            

      ?>
    
        
          
        </div>
    </body>
</html>