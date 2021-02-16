<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <br>
        <h1 class="header">Лабораторна робота #2</h1>
        <div class="list-labs">
            <?php
            for ($i = 1; $i < 5; $i++) {
                echo "<p><a href=\"ivanochko_lab2_example_$i.php\">Завдання #$i</a></p>";
            }
            ?>
            <p><a href="../">Назад</a></p>
        </div>
    </div>

</body>

</html>