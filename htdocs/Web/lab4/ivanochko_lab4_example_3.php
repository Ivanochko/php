<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #3</h2>
        <div class="result">
            <?php
            $trees = array(2 => "Калина", 3 => "Ялинка", 4 => "Смерека", 5 => "Сосна", 6 => "Клен");
            
            out_array_with_index($trees);
            
            echo "<br>Swapped<br>";
            
            swap_key_value_in_array($trees);
            out_array_with_index($trees);
            ?>
        </div>
        <div class="list-labs">

            <p><a href="ivanochko_lab4.php">Назад</a></p>
        </div>
    </div>

</body>

</html> 