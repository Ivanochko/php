<html>

<head>
    <?php
    require("../config.php");
    require("../function.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #1</h2>
        <div class="result">
            <?php
            if (isset($_POST['submit'])) {
                $my_array = array('Рядок 1', 'Рядок 2', 'Рядок 3');
                create_table2($my_array, 3, 8, 8);
            }else {
                echo '<form action="ivanochko_lab3_example_1.php" method="post" class="form-example">';
                echo '<input type="submit" name="submit" value="Generate a table!">';
                echo '</form>';
            }
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab3.php">Назад</a></p>
        </div>
    </div>

</body>

</html>