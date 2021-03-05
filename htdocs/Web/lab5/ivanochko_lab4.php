<html>
<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Лабораторна робота #5</h1>
        <div class="list-labs">
            <?php
            for ($i = 1; $i < 0; $i++) {
                echo "<p><a href=\"ivanochko_lab5_example_$i.php\">Завдання #$i</a></p>";
            }
            ?>
            <p><a href="../">Назад</a></p>
        </div>
    </div>

</body>

</html> 