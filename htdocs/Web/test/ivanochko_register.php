<html>

<head>
    <?php require("../config.php");
    include_once("../db.php");
    ?>
    <link rel="stylesheet" href="../css/vegetables.css">
</head>

<body>
    <div class="main">
        <?php
        require("ivanohko_check_regime.php");
        $regime = $_SESSION["regime"];
        ?>
        <h1 class="header header-shop-vegetables">Інтернет магазин овочів (Іваночко В. В.)</h1>

        <?php



        echo "<div class=\"authorize odd\">";
        if ($regime == 0) {
            echo "    <h1 class=\"header\">Зареєструватись</h1>";
            echo "    <form action=\"ivanochko_register.php\" method=\"post\">";
            echo "        Name: <input type=\"text\" name=\"name\" required> <br>";
            echo "        Email: <input type=\"text\" name=\"email\" required> <br>";
            echo "        Password: <input type=\"password\" name=\"password\" required> <br>";
            echo "        Password: <input type=\"password\" name=\"password-r\" required> <br>";
            echo "        <input type=\"submit\" name=\"submit\"  value=\"Зареєструватись!\">";
            echo "    </form>";


            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $pass_r = $_POST['password-r'];
                $name = $_POST['name'];

                $mysqli = open_connection();

                $isHasUser = false;
                $isValidEmail = false;
                $isValidName = false;
                $isEqualsPass = false;

                if ($pass == $pass_r) {
                    $isEqualsPass = true;
                }

                $pattern = "/[A-ZА-Я]\w*\s[A-ZА-Я]\w*\s[A-ZА-Я]\w*/u";

                if (preg_match($pattern, $name))
                    $isValidName = true;

                $pattern2 = "/.{8,30}\@.{1,10}\..{1,4}/";
                if (preg_match($pattern2, $email)) {
                    $isValidEmail = true;
                }

                if ($result = mysqli_query($mysqli, "SELECT login FROM `Ivanochko_Users`")) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $login = $row['login'];
                        if ($login == $email) {
                            $isHasUser = true;
                        }
                    }
                    mysqli_free_result($result);
                }

                if (!$isHasUser && $isValidEmail && $isValidName && $isEqualsPass) {
                    echo "Ви успішно зареєстровані!<br>";
                    mysqli_query($mysqli, "INSERT INTO `Ivanochko_Users`(login, password, regime, name) VALUES('$email','$pass', 1,'$name')");
                } else {
                    echo "Реєстрація не пройшла успішно, спробуйте ще раз!<br>";
                }

                mysqli_close($mysqli);
            }
        } else {
            echo "Ви вже авторизовані.";
            echo "<a href=\"ivanochko_exit.php\">Вийти?</a>?";
        }
        echo "</div>";
        ?>
    </div>
    <div class="list-labs">
        <p><a href="ivanochko_main_page.php">На головну</a></p>
    </div>

</body>

</html>