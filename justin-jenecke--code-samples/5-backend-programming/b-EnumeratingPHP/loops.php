<?php

# -----------
# While Loop
# -----------

$i=0;
while ($i<10){
  echo "zoom";
  $i++;
}

echo "<br><br>";

# ----------
# Do While
# ----------
$i = 0;

do{
  echo $i;
  $i++;
}
while (false);

//expected output 0


echo "<br><br>";

# ---------
# For Loop
# ---------

for ($i=0;$i<=5;$i++){
    echo $i;
  }

echo "<br><br>";

# ----------------------
# ForEach Loop/function
# ----------------------

$colours = ['blue', 'red', 'green', 'orange'];

foreach ($colours as $colour){
  echo $colour . "\n";
}

//expected output:
//blue
//red
//green
//orange