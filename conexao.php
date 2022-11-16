<?php



try {
    $pdo = new PDO("mysql:dbname=vat;host=localhost", "root", "mynewpassword");
} catch (PDOException $e) {
    echo "Erro no Banco de Dados!" . $e->getMessage();
} catch (Exception $e) {
    echo"Erro génerico" . $e->getMessage();
}
 
  
