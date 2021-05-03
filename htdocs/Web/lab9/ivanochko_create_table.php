<html>

<head>
    <?php require("../config.php");
    include_once("../db.php"); ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Створення таблиці</h1>
        <div class="result">
            <?php
            $mysqli = open_connection();

            mysqli_query($mysqli, "DROP TABLE `Ivanochko_news`");

            mysqli_query($mysqli, "CREATE TABLE `Ivanochko_news` (
                    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    `category` varchar(50) NOT NULL,
                    `header` varchar(300) NOT NULL UNIQUE,
                    `content` text NOT NULL,
                    `date` date NOT NULL,
                    `photo` varchar(300) NULL
                  ) ");


            out_wrapped("Таблицю успішно створено!");






            mysqli_close($mysqli);
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab9.php">Назад</a></p>
        </div>
    </div>

</body>

</html>