<html>
    <head>
        <meta http-equiv="Content-type" content="text/html"; charset="UTF-8">
        <title>insert title</title>
        <link rel = "stylesheet" type="text/css" href="styleHam.css"/>
    </head>

    <body>
        <div class="content">
            <?php
            function checkNumber($value){
                echo $value .'<br/>';
                if($value %2 ==0){
                    return true;

                }else{
                    return false;
                }
            }
            $result = checkNumber(18);
            if($result == true){
                echo "Số chẵn ";
            }else{
                echo"số lẻ";
            }

      ?>
    
        
          
        </div>
    </body>
</html>