<html>

<head>
    <meta charset="utf-8">
    <title>Програмування мовою РНР</title>
</head>

<body class="back">
    <div class="main">
        <br>
        <h1 class="header">Програмування мовою РНР</h1>
        <div id="list-labs">
            <?php
            for ($i = 1; $i < 6; $i++) {
                echo "<p><a href=\"lab$i/ivanochko_lab$i.php\">Лабораторна #$i</a></p>";
            } ?>
        </div>
        <?php require("config.php"); ?>
    </div>
</body>

</html>