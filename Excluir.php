<?php
session_start();
$solicitante = $_SESSION['solicitante'];
$descricao = $_SESSION['descricao'];
$ocorrencia = $_SESSION['ocorrencia']; 
try 
{  $pdo = new PDO("mysql:dbname=vat;host=localhost","root","mynewpassword");   
}  catch (PDOException $e) {
    echo "Erro no Banco de Dados!".$e->getMessage();    
} 
 catch (Exception $e){
     echo"Erro génerico".$e->getMessage();
 }
 
 
 
 $res = $pdo->query("DELETE FROM ordem WHERE solicitante = '$solicitante' ");
 $res->execute();
 
 
 echo "Dados Excluídos com sucesso!";