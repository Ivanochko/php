<html>

<head>
    <?php require("../config.php"); include_once("../db.php"); ?>
    <link rel="stylesheet" href="../css/newspaper.css">
</head>

<body>
    <div class="main">
        <?php 
        echo" <h1 class=\"header\">".$_GET['category']."</h1>";
        ?>
        <div class="newspaper">
            <?php
            require("ivanochko_headers.php");
            ?>
            <div class="main-news-list">

                <?php
                $mysqli = open_connection();
                $index = 0;
                $category = $_GET['category'];
                if ($result = mysqli_query($mysqli, "SELECT id, header, content, date FROM Ivanochko_news WHERE category = '$category' ORDER BY date DESC")) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
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
                ?>

            </div>
        </div>




        <div class="list-labs">
            <p><a href="ivanochko_lab5.php">Назад</a></p>
        </div>
    </div>

</body>

</html>