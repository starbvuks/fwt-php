<?php

// original file path
$fp = "C:\\xampp\\htdocs\\files";

// open and read file
$file1 = fopen("file1.txt", "r");
echo fread($file1, filesize("file1.txt"));

echo "<br>";

// open and write to file
$file2 = fopen("file2.txt", "w");
fputs($file2, "write this");
fclose($file2);

$file2 = fopen("file2.txt", "r");
echo fread($file2, filesize("file2.txt"));

echo "<br>";
/

// open and append to file
$file3 = fopen("file3.txt", "a");
fputs($file3, "append this <t>");
fclose($file3);

$file3 = fopen("file3.txt", "r");
echo fread($file3, filesize("file3.txt"));

echo "<br>";

// delete a file
$file4 = fopen("file4.txt", "w");
echo fwrite($file4, "delete this");
fclose($file4);

unlink("file4.txt");

// close files
fclose($file1);
fclose($file2);
fclose($file3);
