
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

    <!-- Script to handle saving file -->
        <?php

            /*$target_dir = "assets/images/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        */
            $target_dir = "assets/images/";

            foreach ($_FILES as $file){
                $target_file = $target_dir . basename($file["name"]);
                move_uploaded_file($file["tmp_name"], $target_file);
            }
        
        ?>

        <!-- <img src="<?#echo $target_file;?>" alt="" height="200" width="200"> -->

    </body>
</html>

