
<?php

    $target_dir = "assets/images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
       
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

?>

<img src="<?echo $target_file;?>" alt="">