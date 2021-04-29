<html>

<head>
    <?php require("../config.php");
    class Country
    {
        public $name;
        public $capital;
        public $population;

        function __construct(
            string $name,
            string $capital,
            float $population
        ) {
            $this->name = $name;
            $this->capital = $capital;
            $this->population = $population;
        }

        public function outTable()
        {
            echo "<table class=\"created-table-country\">";
            echo "<tr><th class=\"table-header\">Country</th><td>$this->name</td></tr>";
            echo "<tr><th class=\"table-header\">Capital</th><td>$this->capital</td></tr>";
            echo "<tr><th class=\"table-header\">Population</th><td>$this->population </td><td> milions people</td></tr>";
            echo "</table>";
        }
    }
    ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #3</h1>
        <div class="result" style="text-align: left;">

            <?php
            $countries = array(
                new Country("Italy", "Rome", 60.36),
                new Country("Israel", "Jerusalem", 9.05),
                new Country("India", "New Delhi", 1366),
                new Country("Ireland", "Dublin", 4.9),
                new Country("Iceland", "Reykjavík", 0.356)
            );

            foreach ($countries as $country) 
                $country->outTable();
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab7.php">Назад</a></p>
        </div>
    </div>

</body>

</html>