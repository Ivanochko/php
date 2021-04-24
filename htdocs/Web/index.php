<?php
?>

<html>
<head>
    <!-- <meta charset="utf-8"> -->
    <!-- <title>Програмування мовою РНР</title> -->
    <?php require("config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Програмування мовою РНР</h1>
        <div class="list-labs">
            <?php
            for ($i = 1; $i < 8; $i++) {
                echo "<p><a href=\"lab$i/ivanochko_lab$i.php\">Лабораторна #$i</a></p>";
            } ?>
        </div>
    </div>
</body>

</html> 