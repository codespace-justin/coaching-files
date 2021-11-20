<?php

    #Variables
    $firstname = "Justin";
    $lastname = "Jenecke";


/*------------------------------------------------------------------------------------------------------------------------------
        How Quotes work in PHP

        Single quotes, ' ',  will not reference a variable when it's contained within the string while double quotes, " ", 
        will. Example:
------------------------------------------------------------------------------------------------------------------------------*/

    echo nl2br("Single Quotes vs Double Quotes in PHP:\n\n");

    echo "$firstname";

    echo nl2br("\n");

    echo '$firstname';


/*------------------------------------------------------------------------------------------------------------------------------ 
        Appending Strings in PHP
    
        In PHP you can append Strings using a . instead of a + sign
------------------------------------------------------------------------------------------------------------------------------*/

    echo "<br><br>";

    $fullname = $firstname.$lastname;

    echo "My fullname is: ".$fullname;


/*------------------------------------------------------------------------------------------------------------------------------ 
        Case Changes
    
        There are String methods in PHP which allow you to change the case of selected string
------------------------------------------------------------------------------------------------------------------------------*/
    
    echo "<br><br>";

    # Change to upper case
    echo strtoupper($fullname);

    echo "<br>";

    # Change to lower case
    echo strtolower($fullname);
    

/*------------------------------------------------------------------------------------------------------------------------------ 
        Trim Function
    
        Used to trim any character off of the end of a String

        This function has 2 parameters.
            - param 1 is the String or String variable you want to trim
            - param 2 is the character you want to remove from the String

        By default this function will remove all whitespace around a String
------------------------------------------------------------------------------------------------------------------------------*/
        
    echo "<br><br>";

    $trimString = "   I love Takoyaki! ^_^   ";

    echo $trimString;
    
    echo "<br>";

    echo trim($trimString," I^");


    
/*------------------------------------------------------------------------------------------------------------------------------ 
        String Position

        Allows you to find index of a sub String, inside of another String

            - param 1: The long String or what you are looking through
            - param 2: What you are looking for or the Search Criterea

------------------------------------------------------------------------------------------------------------------------------*/
    echo "<br><br>";

    echo "$fullname.<br>";
    echo strpos($fullname, $lastname);

    # expected output 6, because Jenecke starts after the 6th character
    # remember indexes start from 0


/*------------------------------------------------------------------------------------------------------------------------------
    String Replace

    The str_replace() function replaces some characters in a string with other characters. 
    
    It takes three arguments being:
        - the characters to search for in the string
        - the characters to replace them with 
        - and the string itself.

    Here is an example of it in action:
------------------------------------------------------------------------------------------------------------------------------*/

    echo "<br><br>";

    $old  = "I'm just an old string";

    $new = str_replace("an old", "a new", $old);

    echo $new;

    //expected output "I'm just a new string"