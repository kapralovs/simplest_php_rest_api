<?php
$myObj->name="John";
$myObj->age=23;
$myObj->city="New York";

$myJSON=json_encode($myObj);

echo $myJSON;
?>