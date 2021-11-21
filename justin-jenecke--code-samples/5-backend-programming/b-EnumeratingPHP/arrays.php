<?php

# An array is basically a list of variables where each variable can be referred to based on its position in the list (aka Index)

# Arrays in PHP are similar to JavaScript in the sense that you can store different datatypes in a single array
# In some languages data stored in Arrays need to be the same datatype 

/*----------------
    Normal Array
-----------------*/

# Declare Array #1
$myArray1 = array();

# Declare Array #2
$myArray2 = [];


# String Array
$anArray = ["shaggy", "scooby", "velma"];


echo $anArray[0]."<br>";
echo $anArray[1]."<br>";
echo $anArray[2];


echo "<br><br>";

/* -------------------
    Associative Array
-------------------- */

# Associative arrays use key value pairs, similar to properties in JavaScript and JSON

$bob = ['age'=> 23, 'height'=>174, 'hair'=>'brown'];

echo $bob['hair'];


echo "<br><br>";//double line break

/* -------------------
    Multidimensional Arrays
-------------------- */

# Remeber Indexes start at 0

# 2D Array:
#               [0]           [1]
$array2D = [ [1,2,3,4,5] , [10,20,30] ];

echo $array2D[0][1];
echo "<br>";
echo $array2D[1][1];

echo "<br><br>";//double line break

# 3D Array:
#              [0]           [1]            [2]
$array3D = [ [1,2,3,4,5] , [10,20,30] , ['x','y','z'] ];

echo $array3D[0][2]; //printing var at index 2 in 1st array
echo "<br>";
echo $array3D[1][2]; //printing var at index 2 in 2nd array
echo "<br>";
echo $array3D[2][2]; //printing var at index 2 in 3rd array