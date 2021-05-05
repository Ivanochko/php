<html>

<head>
    <?php require("../config.php");
    include_once("../db.php"); ?>
    <link rel="stylesheet" href="../css/newspaper.css">
</head>

<body>
    <div class="main">
        <h1 class="header">Онлайн газета новин</h1>
        <div class="newspaper">
            <?php
            require("ivanochko_headers.php");
            ?>
            <div class="main-news">
                <div class="main-page">
                    <?php

                    $mysqli = open_connection();

                    if ($result = mysqli_query($mysqli, "SELECT id, header FROM Ivanochko_news ORDER BY date DESC LIMIT 3")) {

                        echo "<div class=\"block-of-news\">";
                        echo "    <div class=\"header-of-block\" id=\"fresh\"><span> Найсвіжіше</span></div>";
                        echo "    <div class=\"first-three\">";
                        echo "        <ul>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $header = $row['header'];
                            echo "            <li><a href=\"ivanochko_news.php?id=$id\">$header</a></li>";
                        }
                        echo "        </ul>";
                        echo "    </div>";
                        echo "</div>";
                        echo "<hr class=\"page\">";

                        mysqli_free_result($result);

                        $categories = array();

                        if ($result = mysqli_query($mysqli, "SELECT DISTINCT category FROM Ivanochko_news")) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                array_push($categories, $row['category']);
                            }
                        }

                        foreach ($categories as $category) {

                            mysqli_free_result($result);
                            if ($result = mysqli_query($mysqli, "SELECT `id`, `header` FROM `Ivanochko_news` WHERE `category` = '$category' ORDER BY date DESC LIMIT 3")) {
                                echo "<div class=\"block-of-news\">";
                                echo "    <div class=\"header-of-block\"><a href=\"ivanochko_category_page.php?category=$category\">$category</a></div>";
                                echo "    <div class=\"first-three\">";
                                echo "        <ul>";
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($result)) {

                                    $id = $row['id'];
                                    $header = $row['header'];
                                    
                                    echo "            <li><a href=\"ivanochko_news.php?id=$id\">$header</a></li>";
                                }
                                echo "        </ul>";
                                echo "    </div>";
                                echo "</div>";
                                echo "<hr class=\"page\">";
                            }
                        }
                    }

                    mysqli_close($mysqli);
                    ?>

                    <button class="back-to-all"><a href="ivanochko_newspaper.php">До всіх новин</a></button>
                    <br>
                </div>
            </div>
        </div>
    </div>

</body>

</html>