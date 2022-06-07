<?php 

$nom = $_POST["nom"];
$text = $_POST["mes"];
$post = $_POST["post"];

if($post){


    $write = fopen("com.txt","a+");
    fwrite($write, "<u><b>".$name."</b></u><br>$text<br>");
    fclose($write);


$read = fopen("com.txt", "a+");
echo "Commentaires:<br>";

while(!feof($read)){
echo fread($read, 1024);

fclose($read);
}

if(
    $read = fopen("com.txt", "r+t"));
echo "Commentaires:<br>";

while(!feof($read)){
echo fread($read, 1024);
}
fclose($read);
}


?>