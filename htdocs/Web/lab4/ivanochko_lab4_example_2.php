<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #2</h2>
        <div class="result">
            <h3> Використання циклу foreach </h3>
            <?php
            $names["Бойчук"] = "Іван";
            $names["Мельник"] = "Борис";
            $names["Швець"] = "Антон";
            foreach ($names as $key => $value)
                echo "<b> $value $key <b><br>";
            ?>
        </div>

        <div class="list-labs">
            <p><a href="ivanochko_lab4.php">Назад</a></p>
        </div>
    </div>

</body>

</html>