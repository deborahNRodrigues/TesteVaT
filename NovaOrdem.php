
<?php require_once './conexao.php';?>


<!DOCTYPE html>
<html>
    <head>

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <?php if(isset($_POST['solicitante'])){
     
        $solicitante = addslashes($_POST['solicitante']);
        $descricao = addslashes($_POST['descricao']);
        $ocorrencia = addslashes($_POST['ocorrencia']);
        $data = addslashes($_POST['datetime-local']);
        $res = $pdo->query("INSERT INTO ordem(solicitante,descricao,ocorrencia,data)VALUES('$solicitante','$descricao','$ocorrencia','$data')");
            
  
                

        
            }?>

        <div class="container">
            <form method="POST"class="cadastrar">

                <div class="row">
                    <div class="col s8 offset-s2">
                        <div class="card light-blue lighten-5">
                            <div class="card-content balck-text">
                                <span class="card-title">Nova Ordem</span>
                                <label for="solicitante">Solicitante</label>
                                <input type="text" name="solicitante"id="solicitante"required="">
                                <label for="descricao">Descrição</label>
                                <input type="text" name="descricao"id="descricao"required="">
                                <label for="ocorrencia">Ocorrência</label>
                                <input type="text" name="ocorrencia"id="ocorrencia" required="">
                                <label for="datetime-local" name="datetime-local">Data</label>                               
                                 <input type="datetime-local" name="datetime-local"id="datetime-local">

                                <button class="btn waves-effect waves-light black-text" type="submit" name="cadastrar"value="cadastrar">Cadastrar</button>
                                </div>
                           </div>
                    </div>
                </div>

        </div>
    </form>
                              
            <div class="row">
            <div class="col s12 offset-s8">
                <button class="btn waves-effect waves-light black-text" type="submit" name="voltar"value="voltar"><a href="index.php" class="black-text">Voltar</a></button>
            </div>
            </div>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

