<?php

/* 

Basic Control Statements:

 - "if"

 - "if , else"

 - "if , elseif  ,  else"

 - "switch"

*/

echo "something";

# Basic Conditionals:  >, <, >=, <= and ==

10>5; //true
5>10; // false

10<5; //false
5<10; //true

8>=8; //true
8>=10; //false

8>=8; //true
8<=5; //false

3==3; //true
3==4; //false

//------------------------------------------------------------------
// If Statement
//------------------------------------------------------------------
if (10>5) {
    echo "hello";
  }
  //expected output "hello"
  

  if (10==5) {
    echo "hello";
  }
  //expected output none

  echo "<br><br>";

//------------------------------------------------------------------
// If , else Statement
//------------------------------------------------------------------

if (10>5) {
    echo "hello";
  } else {
    echo "bye";
  }
  //expected output "hello"
  
echo "<br>";

  if (100<1) {
    echo "hello";
  } else {
    echo "bye";
  }
  //expected output "bye"

echo "<br><br>";

//------------------------------------------------------------------
// If , else if , else Statement
//------------------------------------------------------------------

$age = 18;


if ($age>=18 && $age<=65 ) {
  echo "welcome";
} elseif ($age>65) {
  echo "Hey old timer";
} else {
  echo "Goo goo gaga";
}

//expected output "welcome"

echo "<br><br>";

//------------------------------------------------------------------
// Switch Statement
//------------------------------------------------------------------

$trafficLight = 'red';

switch ($trafficLight){
  case 'red':
    echo "Stop";
    break;
  case 'yellow':
    echo "Slow down";
    break;
  case 'green':
    echo "Go";
    break; 
}