<html>

<head>
    <?php require("../config.php"); include_once("../db.php"); ?>
    <link rel="stylesheet" href="../css/newspaper.css">
</head>

<body>
    <div class="main">
        <h1 class="header">Онлайн газета новин</h1>
        <div class="newspaper">
            <?php
            require("ivanochko_headers.php");
            ?>
            <div class="main-news-list">

                <?php
                $mysqli = open_connection();
                $index = 0;
                if ($result = mysqli_query($mysqli, "SELECT id, category, header, content, date FROM Ivanochko_news ORDER BY date DESC")) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $category = $row['category'];
                        $header = $row['header'];
                        $content = $row['content'];
                        $date = $row['date'];
                        $type = "odd";
                        
                        if ($index % 2) {
                            $type = "odd";
                        }else {
                            $type = "even";
                        }
                        $index++;

                        echo "<a class=\"new $type\" href=\"ivanochko_news.php?id=$id\">";
                        echo "    <div class=\"elem-wrapper\">";
                        echo "        <div class=\"new-description\">";
                        echo "            <div class=\"news-category\">$category</div>";
                        echo "            <div class=\"news-header\"><span>$header</span></div>";
                        echo "            <div class=\"news-date\">$date</div>";
                        echo "        </div>";
                        echo "        <div class=\"content\">$content</div>";
                        echo "    </div>";
                        echo "</a>";
                    }
                }
                mysqli_free_result($result);

                mysqli_close($mysqli);

                file_put_contents("output.txt", "All news in database = " . $index);
                ?>
            </div>
        </div>




        <div class="list-labs">
            <p><a href="ivanochko_lab5.php">Назад</a></p>
        </div>
    </div>

</body>

</html>