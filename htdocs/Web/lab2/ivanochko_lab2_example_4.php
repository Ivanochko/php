<html>

<head>
    <?php
    require("../config.php");
    ?>
    <script>
        $(document).ready(function() {

        });
    </script>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #4</h2>
        <div class="main-with-photos">
            <div class="photos">
                <?php
                $filesByIndex = array(
                    0 => "green.png",
                    1 => "christmas_tree.png",
                    2 => "white.png",
                    3 => "pink.png",
                    4 => "red.png",
                    5 => "violet.png",
                    6 => "yellow.png"
                );
                $namesByIndex = array(
                    "Green", "Christmas", "White",
                    "Light Pink", "Red", "Violet", "Yellow"
                );
                $active = 0;

                if (isset($_GET['p0'])) {
                    $indexes = array($_GET['p0'], $_GET['p1'], $_GET['p2'], $_GET['p3']);
                    $active = $_GET['active'];
                    $clicked = $_GET['clicked'];

                    $massage = "Your choose: <br>";
                    $massage .= "<img class=\"image-clicked\" src=\"img/ivanochko_" . $filesByIndex[$clicked] . "\"><br>";

                    if ($clicked == $active) {
                        $massage .= "You click on right tree!";
                        $massage .= "";
                    } else {
                        $massage .= "You don`t click on right tree! You click " . $namesByIndex[$clicked];
                        $massage .= " , but you need " .  $namesByIndex[$active];
                    }
                    $massage .= "<br> <a id=\"reset-images\" href=\"ivanochko_lab2_example_4.php\">Reset</a>";
                } else {

                    $flag = 0;
                    $indexes = array();
                    $indexesAll = array(0, 1, 2, 3, 4, 5, 6);
                    while ($flag != 4) {
                        $temp = random_int(0, 6);
                        if (in_array($temp, $indexesAll)) {
                            array_push($indexes, $temp);
                            unset($indexesAll[$temp]);
                            $flag++;
                        }
                    }
                    $active =  $indexes[random_int(0, 3)];
                    $massage = "Click on " . $namesByIndex[$active] . " tree";
                }

                $url = "active=" . $active;

                for ($i = 0; $i < 4; $i++) {
                    $url .= "&p$i=" . $indexes[$i];
                }
                for ($i = 0; $i < 4; $i++) {
                    echo "<a href=\"ivanochko_lab2_example_4.php?$url&clicked=" . $indexes[$i] . "\">";
                    echo "<img class=\"image-click\" id=\"tree" . $indexes[$i] . "\" src=\"img/ivanochko_";
                    echo $filesByIndex[$indexes[$i]] . "\"></a>";
                }
                echo "<br><br><span class=\"focus\"> $massage <span>";
                ?>
            </div>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab2.php">Назад</a></p>
        </div>
    </div>
    <div id="copyring">
        <a href='https://ru.freepik.com/vectors/watercolor' target="_blank">Watercolor вектор створено в freepik - ru.freepik.com</a>
    </div>
</body>

</html>