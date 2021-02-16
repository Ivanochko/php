<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <br>
        <h2 class="header">Завдання #3</h2>
        <form action="ivanochko_lab2_example_3.php" method="post" class="form-example form-third-example">
            First number: <input type="text" name="first-val" required><br>
            Second number:  <input type="text" name="second-val" required><br>
            <input type="submit" name="submit" value="Button to submit.">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit'])) {
                $x = $_POST['first-val'];
                $y = $_POST['second-val'];

                if ($x != (int)$x || (int)$x <= 0) {
                    echo "Перше число не натуральне!";
                } elseif ($y != (int)$y || (int)$y <= 0) {
                    echo "Друге число не натуральне!";
                } else {
                    $x = (int)$x;
                    $y = (int)$y;
                    echo "x = $x; <br> y = $y; <br>";

                    $F = 0;

                    if ($x < 3 * $y) {
                        $F = 2 * $x + 3 * $y;
                        echo "2x + 3y = $F";
                    } elseif (($y * $y > 2 * $x * $y) || $y > 0) {
                        $F = $x * $y + $x / 3 * $y;
                        echo "xy + x/3y = $F";
                    } else {
                        $F = $x * $x + $y;
                        echo "x^2 +y = $F";
                    }
                }
            }
            ?>
        </div>
        <div class="list-labs">

            <p><a href="ivanochko_lab2.php">Назад</a></p>
        </div>
    </div>

</body>

</html>