<?php
include("head.php");
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$piece=$_POST['piece'];
$adress=$_POST['address'];

echo "Име и фамилия: ".$firstname."\t".$lastname."\n";
echo "<br> Имейл: ".$email."<br> Телефон: ".$tel."<br> Количество: ".$piece."<br> Адрес: ".$adress."<br>";


$data=$firstname."\t".$lastname."\t".$email."\t".$tel."\t".$piece."\t".$adress."\n";

if(file_exists("poruchki.txt"))
	$f=fopen("poruchki.txt", "a");
else
	$f=fopen("poruchki.txt", "w");
fwrite($f, $data);
fclose($f);
include("foot.php");
?>


