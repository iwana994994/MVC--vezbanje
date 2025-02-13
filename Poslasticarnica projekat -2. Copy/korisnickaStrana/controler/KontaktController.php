<?php
class KontaktController {
    private $pdo;

    // Konstruktor za povezivanje sa bazom
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Funkcija za dobijanje kontakta
    public function getKontakt() {
        $stmt = $this->pdo->prepare("SELECT * FROM kontakt ");  // Prilagodi upit po potrebi
        $stmt->execute();
        return $stmt->fetch();
    }

    // Funkcija za unos poruke u bazu (dodajPoruku)
    public function dodajPoruku($ime, $email, $poruka) {
        $sql = "INSERT INTO poruka (ime, email, poruka) VALUES (:ime, :email, :poruka)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':ime', $ime);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':poruka', $poruka);
        return $stmt->execute();
    }
}
?>
