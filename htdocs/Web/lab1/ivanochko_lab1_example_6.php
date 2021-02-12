<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <br>
        <h2 class="header">Завдання з лабораторної роботи</h2>
        <form method="get" action="ivanochko_example_1_1_5_1.php" class="form-example form-first-example" >
            Enter number to send: <input type="number" name="numbersend" required><br>
            <input type="submit" value="Button to submit">
        </form>
        <div class="list-labs">
            <p><a href="ivanochko_lab1.php">Назад</a></p>
            <?php require("../last_modifiend.php"); ?>
        </div>
    </div>
</body>

</html>