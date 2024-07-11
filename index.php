<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//Regular Array
$regular_array = array("first","second","third");
echo $regular_array[0]; //output
$regular_array[0]="the new item"; //add new element
echo "<br>";
echo $regular_array[0];
echo "<br>";

//Associative Array
$associatve_array = array("key1"=>"value1", "key2"=>'value2');
$associatve_array["key3"] = "value3"; //add element to an associatve array
echo $associatve_array["key1"];
echo "<br>";
echo $associatve_array["key2"];
echo "<br>";
echo $associatve_array["key3"];
echo "<br>";
$count= count($associatve_array);
echo $count;

//multiDimention_Array:
$multiDimention_Array= array(
    array("mKey1"=>"[0][0]", "[0][1]" , "[0][2]"),
    array("[1][0]","[1][1]"."[1,2]"),
    array("[2,0]","[2,1]","[2,2]")
);
//add to multiDimention array:
$multiDimention_Array[3]=array("[3,0]","[3,1]","[3,2]");
//output multiDimention Array:
echo "<br>";
echo $multiDimention_Array[0]["mKey1"];


     ?>


</body>
</html>