<html>

<head>
    <?php require("../config.php");
    require("../db.php"); ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #2</h1>
        <div class="result" id="result8_2">

            <form action="ivanochko_lab8_example_2.php" method="post" class="form-example">
                Login: <input type="text" name="login" id="login" required><br>
                Name: <input type="text" name="name" id="name" required><br>
                Email: <input type="email" name="email" id="email" required><br>
                Password: <input type="text" name="password" id="password" required><br>
                <input type="submit" value="Send!" name="submit">
            </form>
            <br>
            <?php
            $mysqli = open_connection();

            if (isset($_POST['submit'])) {
                mysqli_query($mysqli, "INSERT INTO Users (login_user, name_user, email, password) VALUES ('" . $_POST['login'] . "', '" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "')");
            }

            echo "<table class=\"created-table\">";
            echo "<tr><th>Id</th><th>Login</th><th>Name</th><th>email</th></tr>";
            if ($result = mysqli_query($mysqli, 'SELECT id, login_user, name_user, email FROM `Users`')) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['login_user'] . "</td><td>" . $row['name_user'] . "</td><td>" . $row['email'] . "</td></tr>";
                }
                mysqli_free_result($result);
            } else {
                echo "No results!<br>";
            }
            echo "</table>";

            mysqli_close($mysqli);
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab8.php">Назад</a></p>
        </div>
    </div>

</body>

</html>