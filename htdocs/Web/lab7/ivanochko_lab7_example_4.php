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
            string $age,
            string $email
        ) {
            $this->surname = $surname;
            $this->name = $name;
            $this->age = $age;
            $this->email = $email;
        }
    }

    ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #4</h1>
        <div class="result">
            <?php



            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab7.php">Назад</a></p>
        </div>
    </div>

</body>

</html>