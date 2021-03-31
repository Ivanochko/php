<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #3</h1>
        <div class="result">
            <form action="ivanochko_lab6_example_3.php" method="post" class="form-example">
                Please, enter number to check: <br>
                <input type="text" class="input-text" name="number" required><br>
                Shablon is +38(0xx)xx-xx-xxx <br>
                <input type="submit" value="Check!" name="submit">
            </form>

            <?php
            if (isset($_POST['submit'])) {
                echo "<br>";
                $pattern = "/\+38 ?\(0\d\d\) ?(\d\d-){2}\d{3}/";
                if (preg_match($pattern, $_POST['number']))
                    out_wrapped("Yes, it is correct number!");
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