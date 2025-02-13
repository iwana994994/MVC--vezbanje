<?php
include_once "config/database.php";
include_once 'model/KontaktModel.php';
include_once './model/PorukaOdKorisnikaModel.php';
include_once 'controler/KontaktController.php'; // Proveri da li se folder zove "controller"

// Kreiramo objekat kontrolera
$controller = new KontaktController($pdo);

// Proveravamo da li je forma poslata
if (isset($_POST['submit'])) {
    // Preuzimanje podataka iz forme
    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $poruka = $_POST['poruka'];

    // Pozivamo funkciju iz kontrolera da pošaljemo poruku u bazu
    $result = $controller->dodajPoruku($ime, $email, $poruka);

    header("Location: index.php"); // Preusmeravanje pre bilo kakvog HTML-a
    exit();
    
}

// Dohvatamo podatke iz baze
$kontakt = $controller->getKontakt();


// Proveravamo da li su podaci dohvaćeni
if (!$kontakt) {
    die("Došlo je do greške pri učitavanju kontakt podataka.");
}


// Sada uključujemo stranicu kontakt.php, pošto sada postoji $kontakt
include 'template/kontakt.php'; 

// Provera konekcije (možeš je ukloniti ako ne treba)
if ($pdo) {
    echo "Konekcija sa bazom je uspesna";
} else {
    echo "Došlo je do greške";
}
?>
