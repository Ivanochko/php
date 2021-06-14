<div class="authorize odd">
    <h1 class="header">Увійти</h1>
    <form action="ivanochko_authorize.php" method="post">
        Email: <input type="text" name="email" required> <br>
        Password: <input type="password" name="password" required> <br>
        <input type="submit" value="Увійти!">
    </form>
    <?php
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
                        $GLOBALS['regime'] = $regime1;
                        $GLOBALS['login'] = $email;
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
    ?>
</div>