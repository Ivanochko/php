<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
            <?php
$ip = gethostbyname('www.example.com');

echo $ip;
?>
        </div>
        <?php require("config.php"); ?>
    </div>
</body>

</html>