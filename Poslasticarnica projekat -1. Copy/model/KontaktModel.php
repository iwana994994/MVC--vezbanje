<?php
class KontaktModel{
private $pdo;
public function __construct($pdo){
    $this->pdo = $pdo;

}
   function getKontakt(){
   
    $stmt= $this->pdo->query("SELECT * FROM contact_address");
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        die("Nema podataka u bazi ili je upit pogrešan.");
    }
    return $result;

        

  }
}


?>