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
                    <li class="open-prova" data-id="<?php echo $row->id; ?>">
                        <a href="prova.php?prova=<?php echo $row->id_prova; ?>">
                            <?php echo $row->titulo; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <section id="wrap-prova">
                <div class='begin'>
                    <button id='comecar' class='button azul'>Iniciar Prova</button>
                </div>
                <h1><PROVA</h1>

                <div class="questoes">

                </div>



                <button class="button" id="prev">Anterior</button>
                <button class="button" id="next">Proxima</button>
            </section>
            <div style="clear:both;"></div>  
        </section>

        <div style="clear:both;"></div>
        <span class="timer">39:59</span>
    </section>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/function.js"></script>

    </body>
</html>

