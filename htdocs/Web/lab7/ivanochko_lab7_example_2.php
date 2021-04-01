<html>

<head>
    <?php require("../config.php");

    class Number
    {
        public $number;

        function __construct(int $number)
        {
            $this->number = $number;
        }

        public function product()
        {
            $result = array();
            for ($i = 0; $i < 10; $i++)
                array_push($result, $this->number * $i);
            return $result;
        }

        public function product_to_number(int $number)
        {
            return $number * $this->number;
        }
    }
    ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #2</h1>
        <div class="result">

            <?php
            $numbers = array();
            for ($i = 1; $i < 10; $i++)
                $numbers[$i] = new Number($i);

            out_wrapped("Перший спосіб:");
            endl();

            echo "<table class=\"created-table-product\">";
            echo "<tr class=\"table-header\">";
            for ($i = 0; $i < 10; $i++)
                if ($i != 0)
                    echo "<th>$i</th>";
                else
                    echo "<th></th>";
            echo "</tr>";

            foreach ($numbers as $number) {
                echo "<tr>";
                for ($i = 0; $i < 10; $i++)
                    if ($i != 0) 
                        echo "<td>" . $number->product()[$i] . "</td>";
                    else
                        echo "<th class=\"table-header\">$number->number</th>";
                echo "</tr>";
            }

            echo "</table>";


            endl();
            out_wrapped("Другий спосіб:");
            endl();

            echo "<table class=\"created-table-product\">";
            echo "<tr class=\"table-header\">";
            for ($i = 0; $i < 10; $i++)
                if ($i != 0)
                    echo "<th>$i</th>";
                else
                    echo "<th></th>";
            echo "</tr>";
   
            foreach ($numbers as $number) {
                echo "<tr>";
                for ($i = 0; $i < 10; $i++)
                    if ($i != 0) 
                        echo "<td>" . $number->product_to_number($i) . "</td>";
                    else
                        echo "<th class=\"table-header\">$number->number</th>";
                echo "</tr>";
            }

            echo "</table>";


            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab7.php">Назад</a></p>
        </div>
    </div>

</body>

</html>