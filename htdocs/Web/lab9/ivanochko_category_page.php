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
                <?php

                $mysqli = open_connection();

                $id = $_GET['id'];

                if ($result = mysqli_query($mysqli, "SELECT header, category, content, date, photo FROM Ivanochko_news WHERE id = $id")) {
                    $row = mysqli_fetch_assoc($result);

                    $category = $row['category'];
                    $header = $row['header'];
                    $content = $row['content'];
                    $date = $row['date'];
                    $photo = $row['photo'];

                    echo "<div class=\"head-content\">";
                    echo "    <div class=\"datapage\">";
                    echo "        <div class=\"date-page\">$date</div>";
                    echo "        <div class=\"category-page\">$category </div>";
                    echo "    </div>";
                    echo "    <div class=\"header-page\">$header</div>";
                    echo "</div>";
                    echo "<hr class=\"page\">";
                    echo "<div class=\"text-content\">";
                    if ($photo != NULL) {
                        echo "    <img src=\"$photo\" class=\"photo-page\">";
                    }
                    echo "    <p>$content</p>";
                    echo "    <hr class=\"page\">";
                    echo "    <button class=\"back-to-main\"><a href=\"ivanochko_newspaper.php\">На головну</a></button>";
                    echo "</div>";
                }

                mysqli_close($mysqli);
                ?>




            </div>
        </div>
    </div>

</body>

</html>