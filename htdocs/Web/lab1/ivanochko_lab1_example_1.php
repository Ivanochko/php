<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <br>
        <h2 class="header">Доступ до змінних форми</h2>
        <form action="ivanochko_lab1_example_1.php" method="post" id="form-first-example" class="form-example">
            Your name: <input type="text" name="name" placeholder="Enter here"><br>
            Your age:  <input type="number" name="age" min="5" max="100"><br>
            <input type="submit" name="submit" value="Button to submit.">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['name'] && !empty($_POST['age']))) {
                $name = $_POST['name'];
                $age = $_POST['age'];
                echo "Hello, <span class=\"focus\">$name</span>!<br>";
                echo "Your age, <span class=\"focus\">$age</span> the best age ever!";
            } elseif (!empty($_POST['name'] && empty($_POST['age']))) {
                echo "Введіть вік перед підтвердженням";
            } elseif (empty($_POST['name'] && !empty($_POST['age']))) {
                echo "Введіть ім'я перед підтвердженням";
            }
        }

        ?>
        <div class="list-labs">
            <p><a href="ivanochko_lab1.php">Назад</a></p>
            <?php require("../last_modifiend.php"); ?>
        </div>

    </div>
</body>

</html>