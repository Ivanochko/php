<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
    <br>
        <h2 class="header">Цикл for</h2>
        <form action="ivanochko_lab1_example_3.php" method="post" class="form-example form-first-example" >
            Enter number of iterations: <input type="number" name="number-iteration" value="3"><br>
            <input type="submit" name="submit" value="Button to submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit'])) {
                $number = $_POST['number-iteration'];
                if ($number == null) {
                    echo "Please enter value before submit!";
                } else {
                    for ($i = 1; $i < $number + 1; $i++) {
                        echo $i . " ^ 2 = " . ($i * $i) . ";<br>";
                    }
                }
            }
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab1.php">Назад</a></p>
            <?php require("../last_modifiend.php"); ?>
        </div>
    </div>
</body>

</html>