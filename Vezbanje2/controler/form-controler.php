<?php

if($_POST){
$ime=$_POST["name"];
$message=$_POST["message"];
$email=$_POST["email"];

echo "<h1>Uneti podaci</h1>";
echo "<p>Ime: $ime</p>";
echo "<p>Email: $email</p>";
echo "<p>Poruka:<br>$message</p>";
} else {
echo "<p>Nema unetih podataka.</p>";
}

?>