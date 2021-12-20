<?php

    $person = ["name" => "John", "age" => 23, "middlename" => null, "nationality" => "England"];

    $exampleJSON = json_encode($person);

    echo $exampleJSON;
    // Output: {"name":"John", "age":23, "middlename":null, "nationality":"England"}

?>