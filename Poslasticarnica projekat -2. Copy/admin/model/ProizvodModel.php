<?php
include_once("./config/database.php");
class ProizvodModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllProizvodi() {
        $stmt = $this->pdo->query("SELECT * FROM proizvod");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProizvod($ime, $opis, $cena, $zalihe, $slika) {
        $stmt = $this->pdo->prepare("INSERT INTO proizvod (ime, opis, cena, zalihe, slika) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$ime, $opis, $cena, $zalihe, $slika]);
    }

    public function deleteProizvod($id) {
        $stmt = $this->pdo->prepare("DELETE FROM proizvod WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
