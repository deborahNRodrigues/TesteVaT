<?php


class Ordem {
    private $pdo;
  

    

public function __construct($dbname,$host,$user,$senha) 


{    

    try{
        $this->pdo = new PDO("mysql:dbname".$dbname.";host=".$host,$user,$senha);
        
    } catch (PDOException $e){
        echo "Erro no Banco de Dados!".$e->getMessage();
        exit();

    }
    catch (Exception $e){
         echo"Erro génerico".$e->getMessage();
         exit();
    }
    
}
public function buscarDados()

{
	$res = array();
	
	$cmd = $this->pdo->query("SELECT * FROM ordem by numero");
	$res = $cmd->fetchAll(PDO::FETCH_ASSOC);

	return $res;
}


   
public function cadastrarOrdem($solicitante,$descricao,$ocorrencia){
   
    
    $cmd = $this->pdo->query("SELECT numero FROM ordem WHERE numero = 'numero'");
    

    if($cmd->rowCount()>0){
        return false;
        
    }else{
        $cmd = $this->pdo->query("INSERT INTO ordem(solicitante,descricao,ocorrencia) VALUES ('$solicitante,'$descricao','$ocorrencia')");
                
        
        
        return true;
        }
    
}

}
        
    
    

