<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #1</h1>
        <div class="result">
            <form action="ivanochko_lab6_example_1.php" method="post" class="form-example">
                Please, enter email to check: <br>
                <input type="text" class="input-text" name="email" required><br>
                <input type="submit" value="Check!" name="submit">
            </form>

            <?php
            echo "<br>";
            if (isset($_POST['submit'])) {
                $pattern = "/[a-z0-9._]{8,30}@[a-z]{2,5}(\.?[a-z]{2,5}){0,2}/i";
                if (preg_match($pattern, $_POST['email']))
                    out_wrapped("Yes, it is correct email!");
                else
                    out_wrapped("No, it is incorrect!");
            }
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab6.php">Назад</a></p>
        </div>
    </div>

</body>

</html>