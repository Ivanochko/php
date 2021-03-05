<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #1</h2>
        <div class="result">
            <?php
            $first = array();
            $second = array();

            for ($i = 10; $i < 21; $i++)
                array_push($first, pow($i, 2));

            for ($i = 1; $i < 11; $i++)
                array_push($second, pow($i, 3));

            $result = array_merge($first, $second);

            echo "<p> First array:" . "<br>";
            out_array($first);
            echo "</p>" . "<p> Second array:" . "<br>";
            out_array($second);
            echo "</p>" . "<p> Merged array:" . "<br>";
            out_array($result);
            echo "</p>"; 
            ?>
        </div>
        <div class="list-labs">

            <p><a href="ivanochko_lab4.php">Назад</a></p>
        </div>
    </div>

</body>

</html>