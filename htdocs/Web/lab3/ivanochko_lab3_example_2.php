<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #2</h2>
        <?php
        if (isset($_POST['submit'])) {
            echo '<div class="result" id="result3_2">';

            $arr = create_array(10, $_POST['a']);

            out_array_with_index($arr);

            $min = get_min_index($arr);
            $max = get_max_index($arr);
            $avg = get_avg($arr);
 
            echo "<br> Min value: ".$arr[$min]." on index $min";
            echo "<br> Max value: ".$arr[$max]." on index $max";
            echo "<br> Avg value: ".$avg;
            echo '</div>';
        } else {
            echo '<form action="ivanochko_lab3_example_2.php" method="post" class="form-example">';
            echo 'a = <input type="text" name="a" required><br>';
            echo '<input type="submit" name="submit" value="Generate and calculate array!">';
            echo '</form>';
        }
        ?>
        <div class="list-labs">
            <p><a href="ivanochko_lab3.php">Назад</a></p>
        </div>
    </div>

</body>

</html>