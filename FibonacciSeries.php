<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series printing using a Function</title>
</head>
<body>
<?php


$veryold = 0;
$old =1;
$new = 1;
for($i=0; $i<15; $i++){
  echo  $veryold ." ";
    $old = $new;
   $new = $old + $veryold;
    $veryold = $old;

}

?> 
</body>
</html>