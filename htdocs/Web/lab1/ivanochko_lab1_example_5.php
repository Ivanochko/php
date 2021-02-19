<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Цикл do...while</h2>
        <form action="ivanochko_lab1_example_5.php" method="post" class="form-example form-fourth-example">
            Enter multiplier: <input type="number" name="multiplier" min="1" max="10" value="2"><br>
            Enter start value: <input type="number" name="start-value" min="1" max="10" value="2"><br>
            Enter stop value: <input type="number" name="stop-value" min="10" max="100" value="20"><br>
            <input type="submit" name="submit" value="Button to submit">
        </form>
        <div class="result">
        <?php
        if (isset($_POST['submit'])) {
            $multiplier = $_POST['multiplier'];
            $start = $_POST['start-value'];
            $stop = $_POST['stop-value'];
            if ($multiplier == null || $start == null || $stop == null) {
                echo "Please, enter all values before submiting!";
            } else {
                $iter = 0;
                do {
                    echo "$start  * $multiplier = ";
                    $start *= $multiplier;
                    $iter++;
                } while ($start < $stop);
                echo ($start *= $multiplier) . " > $stop<br>";
                echo " Number of iterations <span class=\"focus\"> $iter </span><br>";
            }
        }
        ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab1.php">Назад</a></p>
        </div>
    </div>
</body>

</html>