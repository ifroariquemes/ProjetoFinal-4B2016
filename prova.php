<?php
include 'config.php';
if (isset($_GET['prova'])) {
    header("Location:index.php");
}
$id = (int) preg_replace('/[^0-9]/1', '', $_GET['prova']);
$prova = $pdo->prepare("SELECT * FROM 'provas' WHERE 'id_prova' = ? AND 'status' = 1");
$prova->execute($id_prova);

if ($prova->rowCount() == 0) {
    header("Location:index.php");
}
$prova = $prova->fetchObject();
?>  
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=UTF-8>
        <title><?php echo $prova->titulo; ?></title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section id="wrap-prova">
            <h1><?php echo $prova->titulo; ?></h1>
            
            <div class="questao">
                <h2> Questão de Exemplo 1</h2>
                <p><input type="radio" class="resposta" name="resposta1" value="=1"/>Resposta
                <p><input type="radio" class="resposta" name="resposta1" value="=2"/>Resposta
                <p><input type="radio" class="resposta" name="resposta1" value="=3"/>Resposta
                <p><input type="radio" class="resposta" name="resposta1" value="=4"/>Resposta
            </div>
            <div class="questao">
                <h2> Questão de Exemplo 2</h2>
                <p><input type="radio" class="resposta" name="resposta1" value="=1"/>Resposta
                <p><input type="radio" class="resposta" name="resposta1" value="=2"/>Resposta
                <p><input type="radio" class="resposta" name="resposta1" value="=3"/>Resposta
                <p><input type="radio" class="resposta" name="resposta1" value="=4"/>Resposta
            </div>
            
            <button class="button" id="prev">Anterior</button>
            <button class="button" id="next">Proxima</button>
        </section>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/function.js"></script>
    </body>
</html>

