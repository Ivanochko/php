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
            // task 8
            $distance = 10;
            $day = 1;
            $all_distance = $distance;

            while ($all_distance < 50) {
                $distance *= 1.1;
                $all_distance += $distance;
                $day++;
            }

            echo "<p>Task 8 variant: <br>";
            echo "Sportsman will overcome 50 km after <span class=\"focus\"> $day </span> days! </p> ";

            // task 9

            $sum_even = 0;
            $product_odd = 1;

            for ($i=0; $i < 21; $i++) { 
                if ($i % 2) {
                    $product_odd *= $i;
                }else {
                    $sum_even += $i;
                }
            }

            echo "<p>Task 9 variant: <br>";
            echo "Sum of even elems:<span class=\"focus\"> $sum_even</span>,";
            echo " product of odd elems<span class=\"focus\"> $product_odd</span>! </p> ";

            // task 10

            echo "<p>Task 10 variant: <br>";

            echo '<table class="created-table" border=2 cellpadding=5 cellspacing=5>';
            echo '<tr> <th>x</th> <th>y</th> </tr>';

            for ($x=0; $x <= 4; $x+=0.5) { 
                echo "<tr><td>$x</td><td>" . (2 * $x) . "</td></tr>";
            }
            echo '</table>';

            ?>
        </div>
        <div class="list-labs">

            <p><a href="ivanochko_lab3.php">Назад</a></p>
        </div>
    </div>

</body>

</html>