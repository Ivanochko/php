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

            if (mysqli_query($mysqli, "DROP TABLE `Ivanochko_news`")) {

                if (mysqli_query($mysqli, "CREATE TABLE `Ivanochko_news` (
                    `id` int(11) NOT NULL,
                    `category` varchar(50) NOT NULL,
                    `header` varchar(100) NOT NULL,
                    `content` text NOT NULL,
                    `date` date NOT NULL
                  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;")) {

                    if (mysqli_query($mysqli, "ALTER TABLE `Ivanochko_news`
                                        ADD PRIMARY KEY (`id`),
                                        ADD UNIQUE KEY `header` (`header`);")) {

                        if (mysqli_query($mysqli, "ALTER TABLE `Ivanochko_news`
                                MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
                                COMMIT;")) {

                            out_wrapped("Таблицю успішно створено!");
                        }
                    }
                }
            }


            mysqli_close($mysqli);
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab9.php">Назад</a></p>
        </div>
    </div>

</body>

</html>