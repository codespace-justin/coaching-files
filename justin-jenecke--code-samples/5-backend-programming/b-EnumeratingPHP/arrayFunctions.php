<?php

/*----------------------
    Explode Function
----------------------*/

// Turns a String into an array, takes 2 parameters;

// - param1: the delimiter or character used to seperate values in a string
// - param2: the String you want to convert to an array

# in the example string the delimiter is an empty space
$string = "this is a sentence that has spaces between the words";

$array = explode(" ", $string);

echo $array[0]."<br>";
echo $array[1]."<br>";
echo $array[2]."<br>";
echo $array[3];

//expected output "this", "is", "a", "sentance"

echo "<br><br>";


/*----------------------
    Implode Function
----------------------*/

# Does the opposite of explode. Turns an Array into Strings

$array = ["Hi", "my", "name", "is", "Bob"];

$string = implode(" ", $array);

echo $string;

//expected output "Hi my name is Bob"

echo "<br><br>";

/*---------------------
    Count
----------------------*

The count() function is very simple. It returns the length of an array, which is how many elements it contains. It takes one argument, the array you want to count!

Here it is in action:

 */

$array = ["how", "long", "am", "I", "?"];

$length = count($array);

echo "I am $length long";

//expected output "I am 5 long"
