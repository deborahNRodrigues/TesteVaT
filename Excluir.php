<?php

require_once'./conexao.php';

$id = addslashes($_POST['id']);
$res = $pdo->query("DELETE FROM ordem WHERE id =$id");

 
 
 



 
