<?php
$filename = "sample_file.txt";
$initialContent = "This is the initial content of the file.\n";

$file = fopen($filename, "w");

fwrite($file, $initialContent);

fclose($file);

echo "Initial File Content:";
echo nl2br(file_get_contents($filename));

$additionalContent = "This is the appended content(VK).\n";


$file = fopen($filename, "a");


fwrite($file, $additionalContent);


fclose($file);


echo "Updated File Content (After Appending:";
echo nl2br(file_get_contents($filename));
?>
