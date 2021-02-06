<html>

<head>
</head>

<body>
    <div class="main">
        <h1 class="header">Лабораторна робота #1</h1>
        <div class="list-labs">
            <?php
            $array = array(
                "Доступ до змінних форми", "Оператор if..elseif..else",
                "Оператор switch", "Цикл while",
                "Цикли while", "Цикли do...while"
            );
            for ($i = 1; $i < 7; $i++) {
                echo "<p><a href=\"ivanochko_example_1_1_$i.php\">Приклад ".$array[$i-1]."</a></p>";
            }



            ?>
            <?php require("../config.php"); ?>
        </div>
    </div>


</body>

</html>