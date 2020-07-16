<?php
$oldtxt = "Hello World!";
$newtxt = str_replace("World","Dolly",$oldtxt);
echo "1. ", $newtxt;

echo "<br><br>";
echo "2. ";
echo date("l, d-m-Y h:i:s A");

echo "<br><br>";
echo "3. ";
$myfile = fopen("test1.txt","r");
while(!feof($myfile)){
echo fgets($myfile);
}
?>