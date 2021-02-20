<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #5.2</h2>

        <div class="result" id="result3_5_2">
            <?php
            $matrix = array();
            $a = $_POST['a'];
            $a = (int)($a) % 10 * 3;
            echo "Size of matrix: $a x $a ";

            for ($i = 0; $i < $a; $i++) {
                $matrix[$i] = create_array($a, 90);
            }
            out_matrix($matrix);

            echo 'Array with minimal value of every row: <br>';
            out_array(get_min_vals_of_matrix($matrix));
            echo 'Array with last value of every row: <br>';
            out_array(get_last_vals_of_matrix($matrix));

            ?>
        </div>
        <div class="list-labs">

            <p><a href="ivanochko_lab3.php">Назад</a></p>
        </div>
    </div>

</body>

</html>