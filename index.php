
<?php
session_start();


require_once './assents/header.php';
try {
    $pdo = new PDO("mysql:dbname=vat;host=localhost", "root", "mynewpassword");
} catch (PDOException $e) {
    echo "Erro no Banco de Dados!" . $e->getMessage();
} catch (Exception $e) {
    echo"Erro génerico" . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
    <head>

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>

     

            <div class="row">
                <div class="col s11 offset-s1">
                    <div class="card light-blue lighten-5">
                        <div class="card-content balck-text">
                            <h4>Consulta Ordem de Serviço</h4>


                            <table >
                                <thead>
                                    <tr>
                                        <th>Número do Serviço</th>
                                        <th>Solicitante</th>
                                        <th>Descrição</th>
                                         <th>Ocorrência</th>
                                          <th>Data</th>
                                           <th>Ação</th>
                                    </tr>
                                </thead>


                              

                                    <?php
                                   
                                    $res = $pdo->query("SELECT* FROM ordem ORDER BY id");
                                    $consulta = $res->fetchAll(PDO::FETCH_ASSOC);
                               
                                    for ($i = 0; $i < count($consulta); $i++) {
                                      echo "<tr>";  
                                      
                                        foreach ($consulta[$i] as $v) {

                                            print"<td>" . $v ."</td>";
                                      
                                       
                                              
                                          
                                        }
                                         
                                         echo "<td><a href='../EditarOrdem.php'>Editar</td></a>";
                                       
                                    
                                    }
                                         
                                  
                                    ?>
                                  
                
                               
                                <tbody>
                                  
                                </tr>    
                                    
                  
                            </table>
                            
                               
                            
                      
                     
                                
                             
           
                        
  </div>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>


                      
</body>
 </html>
