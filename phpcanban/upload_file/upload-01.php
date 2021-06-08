 <?php
     require_once 'function.php';


  $fileUpload = $_FILES['file-upload'];
  
    echo '<pre>';
    print_r($fileUpload);
    echo '<pre>';
    $flagSize = checkSize($fileUpload['size'],100 * 1024, 5 * 1024 * 1024 );
    echo $flagExtension = checkExtension($fileUpload['name'], array('jpg', 'png', 'mp3', 'zip'));