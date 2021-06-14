<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>

    <form action="ivanochko_test.php" class="form-for-test" method="post">
        <input type="text" name="text" required> <br>
        <input type="number" name="number" required> <br>
        <input type="date" name="date" required> <br>
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_POST("submit"))) {
        $text = $_POST("text");
        $number = $_POST("number");
        $date = $_POST("date");
    } else {
    }
    ?>

</body>

</html>