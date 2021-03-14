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
                $("#4_5_task1").show();
                $("#4_5_task2").hide();
            });
            $("#button4_5_task2").click(function() {
                $("#4_5_task1").hide();
                $("#4_5_task2").show();
            });
        });
        </script>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #5</h2>
        <div class="result" id="result4_5">
            <input type="button" value="Show task 1" id="button4_5_task1">
            <input type="button" value="Show task 2" id="button4_5_task2">
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
            <div id="4_5_task2">
                <?php
                $populations = array(
                    "Івано-Франківська" => array(
                        "Івано-Франківськ" => 230507,
                        "Коломия" => 61265,
                        "Калуш" => 66140,
                        "Галич" => 54971
                    ),
                    "Львівська" => array(
                        "Львів" => 721301,
                        "Яворів" => 12946,
                        "Самбір" => 34695
                    ),
                    "Чернівецька" => array(
                        "Чернівці" => 262276,
                        "Хотин" => 6324,
                        "Кіцмань" => 6179,
                        "Герца" => 2102
                    )
                );
                $max_population = 0;
                foreach ($populations as $region => $data) {
                    $temp = 0;
                    foreach ($data as $town => $population) {
                        if ($population > $max_population) {
                            $max_population = $population;
                        }
                        $temp += $population;
                    }
                    $populations[$region . "-all"] = $temp;
                }
                $index = 0;
                echo "<table class=\"table-population table-generated-data\">";
                echo "<tr class=\"table-header\"><th>Region</th><th>Town</th><th>Population</th><th>All population</th></tr>";
                $class = "even";
                foreach ($populations as $region => $data) {
                    $i = 0;
                    if ($class == "odd") $class = "even";
                    else $class = "odd";

                    if (is_array($data))
                        foreach ($data as $town => $population) {
                            echo "<tr class=\"$class\"> ";
                            if ($i == 0) {
                                echo "<td rowspan=" . count($data) . ">$region</td>";
                            }
                            if ($population == $max_population) {
                                echo "<td class=\"td-town max-population\">$town</td><td class=\"td-population max-population\">$population</td>";
                            } else {
                                echo "<td class=\"td-town\">$town</td><td class=\"td-population\">$population</td>";
                            }
                            if ($i == 0) {
                                echo "<td rowspan=" . count($data) . ">" . $populations[$region . "-all"] . "</td>";
                                $i = 1;
                            }
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