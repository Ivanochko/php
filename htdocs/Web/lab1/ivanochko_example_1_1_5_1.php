<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body"> 
    <div class="main">
        <h2 class="header">Завдання з лабораторної роботи</h2>
        <?php 
            $number = $_GET['numbersend'] * 2;
            echo ($number). " - число передане з попередньої сторінки і помножене на 2";
        ?>
        <div class="list-labs">
            <p><a href="ivanochko_lab1_example_6.php">Назад</a></p>
        </div>
    </div>
</body>

</html>