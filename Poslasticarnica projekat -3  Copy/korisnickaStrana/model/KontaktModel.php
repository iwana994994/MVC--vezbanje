<?php
class KontaktModel{
private $pdo;
public function __construct($pdo){
    $this->pdo = $pdo;

}
   function getKontakt(){
    $stmt = $this->pdo->query("SELECT * FROM kontakt");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

        

  }
}


?>