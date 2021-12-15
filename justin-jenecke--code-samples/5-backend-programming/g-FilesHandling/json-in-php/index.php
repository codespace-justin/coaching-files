<?php

    $myArr = ["name" => "John", "age" => 23, "middlename" => null, "nationality" => "England"];

    $myJSON = json_encode($myArr);

    echo $myJSON;
    // Output: {"name":"John", "age":23, "middlename":null, "nationality":"England"}

?>