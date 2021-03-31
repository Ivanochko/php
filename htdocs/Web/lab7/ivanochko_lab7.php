<html>
<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Лабораторна робота #7</h1>
        <div class="list-labs">
            <?php
            for ($i = 1; $i < 8; $i++) {
                echo "<p><a href=\"ivanochko_lab7_example_$i.php\">Завдання #$i</a></p>"; 
            }
            ?>
            <p><a href="../">Назад</a></p>
        </div>
    </div>

</body>

</html> 