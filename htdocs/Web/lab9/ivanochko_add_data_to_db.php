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

            $text = str_replace("'", "\\'", open_and_read_file("ivanochko_news.txt", "", false));

            $rows = explode("  &", $text);

            foreach ($rows as $row) {
                $rows[$i++] = explode("  ~", $row);
            }

            foreach ($rows as $row) {
                $category = $row[0];
                $header = $row[1];
                $content = $row[2];
                $date = $row[3];

                if (count($row) == 4) {
                    mysqli_query($mysqli, "INSERT INTO `Ivanochko_news` (`category`, `header`, `content`, `date`) VALUES ('$category', '$header', '$content', '$date')");
                }elseif(count($row) == 5) {
                    $photo = $row[4];
                    mysqli_query($mysqli, "INSERT INTO `Ivanochko_news` (`category`, `header`, `content`, `date`, `photo`) VALUES ('$category', '$header', '$content', '$date', '$photo')");
                }
            }

            out_wrapped("Таблицю заповнено значеннями з файлу!");

            mysqli_close($mysqli);
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab9.php">Назад</a></p>
        </div>
    </div>

</body>

</html>