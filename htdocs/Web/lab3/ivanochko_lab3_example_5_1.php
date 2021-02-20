<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #5.1</h2>

        <?php
        if (isset($_POST['submit'])) {
            echo '<div class="result" id="result3_5">';
            
            $arr = create_array(5);

            echo "<p>Заданий масив:<br>";
            out_array_with_index($arr);

            echo "</p><p>Масив в оберненому порядку:<br>";
            out_reversed_array_with_index($arr);
            
            echo '</div>';
        }
        ?>

        <div class="list-labs">

            <p><a href="ivanochko_lab3_example_5.php">Назад</a></p>
        </div>
    </div>

</body>

</html>