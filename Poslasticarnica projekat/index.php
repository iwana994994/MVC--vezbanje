<?php
include_once "config/database.php";

if($pdo){
    echo "Konekcija sa bazom je uspesna";
}
else{
 echo "doslo je do greske";
}

?>