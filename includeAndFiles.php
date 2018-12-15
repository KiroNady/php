<?php 

include 'start.php';

//mytest();

echo readfile("web.txt");

echo "\n";

$myfile = fopen("web.txt" , "r" ) or die("unable to open file");
echo fread($myfile , filesize("web.txt"));
fclose($myfile);

echo "\n";

?>