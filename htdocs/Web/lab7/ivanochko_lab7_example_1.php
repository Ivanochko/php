<html>

<head>
    <?php require("../config.php") ?>
    <?php
    class Student
    {
        public $name;
        public $surname;
        public $group;

        function __construct(string $name = "Name by def", string $surname = "Surname by def", string $group = "Group by def")
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->group = $group;
        }

        public function getInfo(): string
        {
            return "Student $this->name $this->surname group $this->group";
        }

        public function outInfo(): void
        {
            echo $this->getInfo() . "<br>";
        }

        public function __clone()
        {
            $this->name = "Name by def";
            $this->surname = "Surname by def";
            $this->group = "Group by def";
        }
    }
    ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #1</h1>
        <div class="result">
            <?php

            $st1 = new Student(); // with default
            $st2 = new Student(); // with default
            $st3 = new Student(); // with default

            // change default values:
            $st3->name = "Adam";
            $st3->surname = "Zegal";
            $st3->group = "IPZ-4";

            $st4 = new Student("Gerard", "Backword", "IPZ-1"); // with constructor
            $st5 = new Student("Jack", "Gone", "IPZ-3"); // with constructor
            $st6 = new Student("Jane", "Andel", "IPZ-3"); // with constructor

            //clone object
            $st7 = clone $st6;

            $group = array($st1, $st2, $st3, $st4, $st5, $st6, $st7);

            foreach ($group as $student)
                $student->outInfo();
            ?>

        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab7.php">Назад</a></p>
        </div>
    </div>

</body>

</html>