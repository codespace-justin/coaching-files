<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <h1>Single File</h1>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="fileToUpload">Select images to upload:</label><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" name="submit">
        </form>

        <br>

        <h1>Multiple Files</h1>

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="fileToUpload">Select images to upload:</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="file" name="fileToUpload2" id="fileToUpload2">
            <input type="submit" name="submit">
        </form>
    </body>

</html>