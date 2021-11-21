<?php

# While Loop

$i=0;
while ($i<10){
  echo "zoom";
  $i++;
}

echo "<br><br>";


# Do While

$i = 0;

do{
  echo $i;
  $i++;
}
while (false);

//expected output 0


# For Loop

echo "<br><br>";

for ($i=0;$i<=5;$i++){
    echo $i;
  }