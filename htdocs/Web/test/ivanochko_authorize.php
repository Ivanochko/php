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
        if ($regime == 0) {

            echo "  <div class=\"authorize odd\">";
            echo "    <h1 class=\"header\">Увійти</h1>";
            echo "    <form action=\"ivanochko_authorize.php\" method=\"post\">";
            echo "        Email: <input type=\"text\" name=\"email\" required> <br>";
            echo "        Password: <input type=\"password\" name=\"password\" required> <br>";
            echo "        <input type=\"submit\" name=\"submit\" value=\"Увійти!\">";
            echo "    </form>";

            echo "<a href=\"ivanochko_register.php\">Зареєструватись!</a>";

            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $mysqli = open_connection();

                $isHasUser = false;
                $isAuthorized = false;
                $isValidEmail = false;

                $pattern2 = "/.{8,30}\@.{1,10}\..{1,4}/";
                if (preg_match($pattern2, $email)) {
                    $isValidEmail = true;
                }


                if ($result = mysqli_query($mysqli, "SELECT login, password, regime FROM `Ivanochko_Users`")) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $login = $row['login'];
                        $password = $row['password'];
                        $regime1 = $row['regime'];
                        if ($login == $email) {
                            $isHasUser = true;
                            if ($password == $pass) {
                                $isAuthorized = true;
                                echo "Ви успішно увійшли!<br>";
                                echo "<a href=\"ivanochko_main_page.php\">На головну</a><br>";
                                $_SESSION['regime'] = $regime1;
                                $_SESSION['login'] = $email;
                            }
                        }
                    }
                    mysqli_free_result($result);
                }

                if ($isHasUser && !$isAuthorized) {
                    echo "Неправильний пароль для корисутвача!<br>";
                } elseif (!$isHasUser) {
                    echo "Користувача не знайдено!<br>";
                    
                }


                mysqli_close($mysqli);
            }

            echo " </div>";
        } else {
            echo "Ви вже авторизовані.";
            echo "<a href=\"ivanochko_exit.php\">Вийти?</a>?";
        }
        ?>

        <div class="list-labs">
            <p><a href="ivanochko_main_page.php">На головну</a></p>
        </div>

</body>

</html>