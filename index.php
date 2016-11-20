<?php include 'config.php'; ?>    
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=UTF-8>
        <title>Provas</title>
    </head>
    <body>
        <ul>
            <?php
                $prova = $pdo->prepare("SELECT * FROM `provas` WHERE `status` = 1 ORDER BY `id_prova` DESC");
                $provas->execute();
                
                while ($row = $provas->fetchObject()) {
            ?>
                <li>
                    <a href="prova.php?prova=<?php echo $row->id_prova; ?>">
                        <?php echo $row->titulo; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>

    </body>
</html>

