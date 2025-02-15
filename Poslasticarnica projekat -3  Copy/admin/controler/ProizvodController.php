<?php
require_once './config/database.php';
include_once("./model/ProizvodModel.php");


class ProizvodController {
    private $proizvodModel;

    public function __construct($pdo) {
        $this->proizvodModel = new ProizvodModel($pdo);
    }

    public function prikaziProizvode() {
       return $this->proizvodModel->getAllProizvodi();
    }

    public function dodajProizvod() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ime = $_POST['ime'];
            $opis = $_POST['opis'];
            $cena = $_POST['cena'];
            $zalihe = $_POST['zalihe'];
            $slika = $_POST['slika']; 

            $this->proizvodModel->addProizvod($ime, $opis, $cena, $zalihe, $slika);
            header("Location: admin-nav.php?page=proizvod"); // Preusmeravanje na admin-nav.php sa parametrom page
            exit();
        }
        include './template/dodajProizvod.php';
    }

    public function obrisiProizvod($id) {
        if ($id) {
            $this->proizvodModel->deleteProizvod($id);  // Brisanje proizvoda prema ID-u
           
        }
    
    }
}



?>
