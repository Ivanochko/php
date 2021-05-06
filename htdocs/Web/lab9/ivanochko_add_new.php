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
            <h1 class="header">Додати новину</h1>
            <div class="main-news">
                <form action="ivanochko_add_new.php" method="post" class="form-to-add">
                    <div class="form-elem"><span> Введіть категорію: </span> <input type="text" name="category" placeholder="  Категорія" required></div>
                    <div class="form-elem"><span> Введіть заголовок: </span> <input type="text" name="header" placeholder="  Заголовок" required></div>
                    <div class="form-elem"><span> Введіть контент: </span> <textarea name="content" cols="30" rows="10" required>Контент сторінки</textarea> </div>
                    <div class="form-elem"><span> Введіть дату: </span> <input type="text" name="date" placeholder="  YYYY-MM-DD" required></div>
                    <div class="form-elem"><span> Введіть назву або шлях до фото: </span> <input type="text" name="photo"></div>
                    <input type="submit" value="Додати!" name="submit">
                </form>

                <?php
                $mysqli = open_connection();

                if (isset($_POST['submit'])) {
                    $category = $_POST['category'];
                    $header = $_POST['header'];
                    $content = htmlspecialchars($_POST['content']);
                    $date = $_POST['date'];
                    $photo = $_POST['photo'];

                    if ($photo == 0) {
                        mysqli_query($mysqli, "INSERT INTO `Ivanochko_news` (`category`, `header`, `content`, `date`) VALUES ('$category', '$header', '$content', '$date')");
                    } else {
                        mysqli_query($mysqli, "INSERT INTO `Ivanochko_news` (`category`, `header`, `content`, `date`, `photo`) VALUES ('$category', '$header', '$content', '$date', '$photo')");
                    }
                }

                mysqli_close($mysqli);
                ?>
            </div>
        </div>
    </div>

</body>

</html>