<!DOCTYPE html>
<html lang="en">
   
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
    
        <script>

            // Create Request Object
            const xhr = new XMLHttpRequest();

            // Method       // URL or URI
            xhr.open('GET', 'update.php');

            // Track the state changes of the request.
            xhr.onreadystatechange = function () {

                let done = 4; // readyState 4 means the request is done.
                let ok = 200; // status 200 is a successful return.

                if (xhr.readyState === done) {
                    
                    if (xhr.status === ok) {
                        document.getElementById("demo").innerHTML = this.responseText; // 'All good here.'
                    } else {
                        console.log('Error: ' + xhr.status); // An error occurred during the request.
                    }
                }
            };
            // Send the request
            xhr.send(null);

        </script>
    </body>
</html>