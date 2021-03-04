<html>

<head>
    <?php
    require("../config.php");
    ?>
    <script>
        $(document).ready(function() {
            $("#4_5_task1").hide();
            $("#4_5_task2").hide();

            $("#button4_5_task1").click(function() {
                $("#4_5_task1").toggle();
            });
            $("#button4_5_task2").click(function() {
                $("#4_5_task2").toggle();
            });
        });
    </script>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #4</h2>
        <div class="result" id="result4_5">
            <input type="button" value="Show task 1" id="button4_5_task1">
            <div id="4_5_task1">
                <?php
                $desserts = array(
                    "Шарлотка" => array("Ціна" => 75, "Калорійність" => 152),
                    "Наполеон" => array("Ціна" => 92, "Калорійність" => 558),
                    "Прага" => array("Ціна" => 103, "Калорійність" => 441),
                    "Спартак" => array("Ціна" => 115, "Калорійність" => 308),
                    "Трюфель" => array("Ціна" => 135, "Калорійність" => 345)
                );
                $max_kal_elem = 0;
                $max_price_elem = 0;
                $max_kalories = 0;
                $max_price = 0;
                foreach ($desserts as $key => $value) {
                    if ($value["Ціна"] > $max_price) {
                        $max_price_elem = $key;
                        $max_price = $value["Ціна"];
                    }
                    if ($value["Калорійність"] > $max_kalories) {
                        $max_kal_elem = $key;
                        $max_kalories = $value["Калорійність"];
                    }
                }
                out_array_with_index($desserts);
                if ($max_kal_elem == $max_price_elem) {
                    echo "Найдорожчий десерт є найкалорійнішим, це " . $max_price_elem . '<br>';
                } else {
                    echo "Найдорожчий десерт не є найкалорійнішим! <br>";
                }
                ?>
            </div>
            <div class="result" id="result4_5">
                <input type="button" value="Show task 2" id="button4_5_task2">
                <div id="4_5_task2">
                    <?php
                    $populations = array(
                        "Івано-Франківська" => array(
                            "Івано-Франківськ" => 230507,
                            "Коломия" => 61265,
                            "Калуш" => 66140
                        ),
                        "Львівська" => array(
                            "Львів" => 721301,
                            "Яворів" => 12946,
                            "Самбір" => 34695
                        ),
                        "Чернівецька" => array(
                            "Чернівці" => 262276,
                            "Хотин" => 11124,
                            "Кіцмань" => 6179
                        )
                    );
                    foreach ($populations as $key => $value) {
                    
                    }
                    $index = 0;
                    echo "<table class=\"table-population\">";
                    echo "<tr class=\"table-header\"><th>Region</th><th>Town</th><th>Population</th></tr>";
                    foreach ($populations as $key => $value) {
                        $i = 0;
                        foreach ($value as $town => $population) {
                            if ($index < 3) {
                                echo "<tr class=\"odd\">";
                                $index++;
                            } elseif ($index < 6) {
                                echo "<tr class=\"even\">";
                                $index++;
                            } else {
                                echo "<tr class=\"odd\">";
                                $index = 0;
                            } 
                            if ($i == 0) {
                                echo "<td rowspan=3>$key</td>";
                                $i = 1;
                            }
                            echo "<td class=\"td-town\">$town</td><td class=\"td-population\">$population</td>";

                            echo "</tr>";
                        }
                    }
                    echo "</table>";
                    ?>
                </div>
            </div>
            <div class="list-labs">

                <p><a href="ivanochko_lab4.php">Назад</a></p>
            </div>
        </div>

</body>

</html>