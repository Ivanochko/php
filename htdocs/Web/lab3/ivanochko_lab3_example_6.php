<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #6</h2>

        <form action="ivanochko_lab3_example_6.php" method="post" class="form-example">
            Input N: <input type="text" name="N"><br>
            <input type="submit" name="submit" value="Submit!">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit'])) {
                $N = $_POST['N'];

                if ($N != (int)$N || (int)$N <= 0) {
                    echo "Число не натуральне!<br>";
                } else {
                    echo "Число натуральне!";
                    echo "Перші $N натуральних чисел піднесені до квадрату: <br>";
                    task6($N);
                } 
            }
            include_once("ivanochko_lab3_example_7.php");
            ?>
        </div>

        <div class="list-labs">
            <p><a href="ivanochko_lab3.php">Назад</a></p>
        </div>
    </div>

</body>

</html>