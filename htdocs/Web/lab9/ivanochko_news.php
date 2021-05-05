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
                        echo "    <img src=\"photos/$photo\" class=\"photo-page\">";
                    }
                    echo "    <p>$content</p>";
                    echo "    <hr class=\"page\">";
                    echo "    <button class=\"back-to-main\"><a href=\"ivanochko_newspaper.php\">На головну</a></button>";
                    echo "</div>";
                }

                mysqli_close($mysqli);
                ?>

                <!-- <div class="head-content">
                    <div class="datapage">
                        <div class="date-page">$date-00-00</div>
                        <div class="category-page">$category </div>
                    </div>
                    <div class="header-page">$header</div>
                </div>
                <hr class="page">
                <div class="text-content">
                    <img src="photos/morhenshtern-vidpoviv-na-vnesennia-v-chornyi-spysok.png" class="photo-page">
                    <p>$content What is Lorem Ipsum?
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                        Why do we use it?
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                    <hr class="page">
                    <button class="back-to-main"><a href="ivanochko_newspaper.php">На головну</a></button>
                </div>
 -->


            </div>
        </div>
    </div>

</body>

</html>