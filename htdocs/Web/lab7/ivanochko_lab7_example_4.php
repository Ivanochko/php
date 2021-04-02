<html>

<head>
    <?php require("../config.php");
    class User
    {
        public $surname;
        public $name;
        public $age;
        public $email;

        function __construct(
            string $surname,
            string $name,
            int $age,
            string $email
        ) {
            $this->surname = $surname;
            $this->name = $name;
            $this->age = $age;
            $this->email = $email;
        }

        public static function construct_with_array(array $data): object
        {
            $data_new = array();
            foreach ($data as $key => $value)
                array_push($data_new, $value);

            return new User($data_new[0], $data_new[1], $data_new[2], $data_new[3]);
        }

        public function out_table_with_data()
        {
            echo "<table class=\"created-table-user\">";
            echo "<tr class=\"table-header\"><th>Прізвище</th><th>Ім'я</th><th>Вік</th><th>email</th><tr>";
            echo "<tr><td>$this->surname</td><td>$this->name</td><td>$this->age</td><td>$this->email</td></tr>";
            echo "</table>";
        }

        public static function get_data_from_form(
            string $method_form = "post",
            string $surname_in_form = "surname",
            string $name_in_form = "name",
            string $age_in_form = "age",
            string $email_in_form = "email"
        ) {
            $data = array($surname_in_form => "", $name_in_form => "", $age_in_form => 0, $email_in_form => "");
            if ($method_form == "post")
                foreach ($data as $key => &$value)
                    $value = $_POST[$key];
            elseif ($method_form == "get")
                foreach ($data as $key => &$value)
                    $value = $_GET[$key];
            else {
                echo "Invalid method!";
                return;
            }
            return $data;
        }
    }

    ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #4</h1>
        <form action="ivanochko_lab7_example_4.php" method="post" class="form-example">
            Surname: <input type="text" name="surname" id="surname" required><br>
            Name: <input type="text" name="name" id="name" required><br>
            Age: <input type="number" name="age" id="age" required><br>
            Email: <input type="text" name="email" id="email" required><br>
            <input type="submit" value="Sumbit!" name="submit">
        </form>
        <div class="result">
            <?php
            if (isset($_POST["submit"])) {
                $data = User::get_data_from_form();
                $user = User::construct_with_array($data);
                $user->out_table_with_data();
            }
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab7.php">Назад</a></p>
        </div>
    </div>

</body>

</html>