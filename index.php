<?php include 'config.php'; ?>    
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=UTF-8>
        <title>Provas</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section id="wrap-geral">
        <ul id="prova-lista">
            <?php
                $prova = $pdo->prepare("SELECT * FROM `provas` WHERE `status` = 1 ORDER BY `id_prova` DESC");
                $provas->execute();
                
                while ($row = $provas->fetchObject()) {
            ?>
            <li class="open-prova" data-id="<?php echo $row->id;?>">
                    <a href="prova.php?prova=<?php echo $row->id_prova; ?>">
                        <?php echo $row->titulo; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
            <section id="wrap-prova">
            <h1><PROVA</h1>
            
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
            <div style="clear:both;"></div>  
        </section>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/function.js"></script>
        
    </body>
</html>

