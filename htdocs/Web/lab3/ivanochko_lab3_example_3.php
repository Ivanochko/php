<html>

<head>
    <?php
    require("../function.php");
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #3</h2>
        <?php
        if (isset($_POST['submit'])) {
            echo '<div class="result">';
            
            $arr = create_array(5);

            echo "<p>До змін:<br>";
            out_array($arr);
            
            power_all_elems($arr, 2);

            echo "</p><p>Після змін:<br>";
            out_array($arr);
            
            echo '</div>';
        } else {
            echo '<form action="ivanochko_lab3_example_3.php" method="post" class="form-example">';
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