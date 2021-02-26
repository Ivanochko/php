<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #4</h2>
        <div class="result">
            <?php
            $countries = array(
                "Ukraine" => array(
                    "name" => 'Україна',
                    "capital" => 'Київ',
                    "population" => '45'
                ),
                "Germany" => array(
                    "name" => 'Німеччина',
                    "capital" => 'Берлін',
                    "population" => '67'
                ),
                "Great Britain" => array(
                    "name" => 'Великоританія',
                    "capital" => 'Лондон',
                    "population" => '82'
                ),
                "Spain" => array(
                    "name" => 'Іспанія',
                    "capital" => 'Мадрид',
                    "population" => '74'
                ),
                "Italy" => array(
                    "name" => 'Італія',
                    "capital" => 'Рим',
                    "population" => '59'
                )
            );
            echo "<table class=\"table-countries\">";
            echo "<tr class=\"table-header\"><th>Name</th><th>Capital</th><th>Population</th></tr>";
            $i = 0;
            foreach ($countries as $country => $data) {
                if ($i % 2) {
                    echo "<tr class=\"odd\">";
                } else {
                    echo "<tr class=\"even\">";
                }
                $i++;
                foreach ($data as $value) {
                    echo "<td>";
                    echo "$value";
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab4.php">Назад</a></p>
        </div>
    </div>

</body>

</html>