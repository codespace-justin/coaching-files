<?php

    # PHP Variables:

    /*
        PHP variables are declared with a '$' sign, and function exactly how they would in JavaScript.
        
        They are little boxes or placeholders inside your application, which you can use to store data
        or information.

        Remember, what comes after the $ sign is the variable itself, not the value assigned to it. The phyiscal name or
        data assigned to the variable is simply what is stored inside the variable
    */

    #Example: Storing my name in the variable $name
    $name = "Justin";

    #Displaying it
    echo $name;

    # Line break escape character
    echo nl2br("\n\n");

    echo "Different Data Types in PHP:";

    echo nl2br("\n\n");

    # String - Plain old text or characters
    $myString = "This is a String";
    echo $myString;
    
    echo nl2br("\n");

    # Integer - any positive or negative whole number
    $myInt = 10;
    echo $myInt;

    echo nl2br("\n");

    # Float - Any number with a decimal value (aka floating point) - Usually used for percentages/currencies/etc.
    $myFloat = 11.99;
    echo $myFloat;

    echo nl2br("\n");

    # Boolean - Can be either *true or *false,  used when checking a condition to perform an instruction
    #         - Booleans also have a corresponding integer value: 1 for true, and 0 for false
    $myBoolean = false;

    if ($myBoolean == true) {
        echo "true";
    } else {
        echo "false";
    }

    echo nl2br("\n");

    # Null - means a variable is decalared but it is empty or has no value assigned to it
    $nullVar = null;
    echo $nullVar;