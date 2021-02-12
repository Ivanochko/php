<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <br>
        <h1 class="header">Лабораторна робота #1</h1>
        <div class="list-labs">
            <?php
            $array = array(
                "Доступ до змінних форми та   оператор if..elseif..else",
                "Оператор switch", "Цикл for",
                "Цикли while", "Цикли do...while",
                "заданого завдання"
            );
            for ($i = 1; $i < 7; $i++) {
                echo "<p><a href=\"ivanochko_lab1_example_$i.php\">Приклад ".$array[$i-1]."</a></p>";
            }
            ?>
            <p><a href="../">Назад</a></p>
            <?php require("../last_modifiend.php"); ?>
        </div>
    </div>


</body>

</html>