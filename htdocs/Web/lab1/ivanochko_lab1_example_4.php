<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Цикл while</h2>
        <form action="ivanochko_lab1_example_4.php" method="post" id="form-forth-example" class="form-example">
            Enter multiplier: <input type="number" name="multiplier" min="1" max="10" value="2"><br>
            Enter start value: <input type="number" name="start-value" min="1" max="10" value="2"><br>
            Enter stop value: <input type="number" name="stop-value" min="10" max="100" value="20"><br>
            <input type="submit" name="submit" value="Button to submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $multiplier = $_POST['multiplier'];
            $start = $_POST['start-value'];
            $stop = $_POST['stop-value'];
            if ($multiplier == null || $start == null || $stop == null) {
                echo "Please, enter all values before submiting!";
            } else {
                $iter = 0;
                while($start < $stop){
                    echo "$start  * $multiplier = ";
                    $start *= $multiplier;
                    $iter++;
                }
                echo ($start *= $multiplier)." > $stop<br>";
                echo " Number of iterations <span class=\"focus\"> $iter </span><br>";
            }
        }
        ?>
        <div class="list-labs">
            <p><a href="ivanochko_lab1.php">Назад</a></p>
            <?php require("../last_modifiend.php"); ?>
        </div>
    </div>
</body>

</html>