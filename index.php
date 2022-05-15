<?php
$myObj->name="John";
$myObj->age=23;
$myObj->city="New York";

$d = dir(getcwd());

$a=array();

while (($file = $d->read()) !== false){
  array_push($a,$file);
}
$d->close();

$myObj->files=$a;
$myJSON=json_encode($myObj);

echo $myJSON;
?>