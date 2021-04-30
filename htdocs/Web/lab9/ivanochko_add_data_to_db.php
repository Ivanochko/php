<html>

<head>
    <?php require("../config.php");
    include_once("../db.php"); ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Заповнення таблиці</h1>
        <div class="result">
            <?php
            $mysqli = open_connection();



            mysqli_close($mysqli);
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab9.php">Назад</a></p>
        </div>
    </div>

</body>

</html>