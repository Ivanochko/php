<?php

require("config.php");

?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Програмування мовою РНР</title>
</head>

<body class="back">
    <div class="main">

        <h1>Програмування мовою РНР</h1>
        <div id="list-labs">
            <?php
            $i = 1;
            for ($i = 1; $i < 9; $i++) {
                # code...
                echo "<p><a href=\"lab$i/lab$i.php\">Лабораторна #$i</a></p>";
            }

            ?>
            <!-- <p><a href="lab1/lab1.php">Лабораторна #1</a></p>
            <p><a href="lab2/lab2.php">Лабораторна #2</a></p>
            <p><a href="lab3/lab3.php">Лабораторна #3</a></p>
            <p><a href="lab4/lab4.php">Лабораторна #4</a></p>
            <p><a href="lab5/lab5.php">Лабораторна #5</a></p>
            <p><a href="lab6/lab6.php">Лабораторна #6</a></p>
            <p><a href="lab7/lab7.php">Лабораторна #7</a></p>
            <p><a href="lab8/lab8.php">Лабораторна #8</a></p> -->
        </div>
    </div>
</body>

</html>