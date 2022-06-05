<?php

//switch
$favcolor = "putih";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

//loops while
$x = 1;
while($x < 5){
    echo "lupa $x \n";
    $x++;
}

//do while
$y = 1;
do{
    echo "ini do $y \n";
    $y++;
}while($y < 5);

//for loops
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x \n";
}


?>