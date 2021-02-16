<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <br>
        <h2 class="header">Завдання #1</h2>
        <form action="ivanochko_lab2_example_1.php" method="post" class="form-example form-third-example" >
            First number: <input type="number" name="first-val" required><br>
            Second number:  <input type="number" name="second-val" required><br>
            <input type="submit" name="submit" value="Button to submit.">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit'])) {
                $firstNumber = $_POST['first-val'];
                $secondNumber = $_POST['second-val'];
                echo "$firstNumber + $secondNumber = " . ($firstNumber + $secondNumber) . "<br>";
                echo "$firstNumber - $secondNumber = " . ($firstNumber - $secondNumber) . "<br>";
                echo "$firstNumber * $secondNumber = " . ($firstNumber * $secondNumber) . "<br>";
                echo "$firstNumber / $secondNumber = " . ($firstNumber / $secondNumber) . "<br>";
                echo "$firstNumber % $secondNumber = " . ($firstNumber % $secondNumber) . "<br>";
            }
            ?>
        </div>
        <div class="list-labs">

            <p><a href="ivanochko_lab2.php">Назад</a></p>
        </div>
    </div>

</body>

</html>