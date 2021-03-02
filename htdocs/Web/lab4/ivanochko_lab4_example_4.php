<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #4</h2>
        <div class="result" id="result4_4">
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

            out_foreach_in_table($countries);

            out_foreach_tences($countries);
            
            ksort($countries);

            out_array_with_index($countries);

            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab4.php">Назад</a></p>
        </div>
    </div>

</body>

</html>