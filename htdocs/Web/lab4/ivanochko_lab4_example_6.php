<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #6</h2>
        <div class="result" id="result4_6">

            <form action="ivanochko_lab4_example_6.php" method="post" class="form-example" id="form-task4_6">
                Your first name: <input type="text" name="first-name" id="first-name" placeholder="first-name" required class="data-input"><br>
                Your last name: <input type="text" name="last-name" id="last-name" placeholder="last-name" required class="data-input"><br>
                Email: <input type="email" name="email" id="email" required placeholder="email" class="data-input"><br>
                Password: <input type="password" name="password" id="password" required class="data-input"> <br>
                Repeat your password: <input type="password" name="password-repeat" id="password-repeat" required class="data-input"> <br>
                <input type="reset" value="Reset form" id="reset-sub">
                <input type="submit" name="submit" value="Send it!" id="but-sub"><br>
            </form>
            <?php
            if (isset($_POST['submit'])) {

                $data = array(
                    'First name' => $_POST['first-name'],
                    'Last name' => $_POST['last-name'],
                    'Email' => $_POST['email'],
                    'Password' => $_POST['password'],
                    'Password-repeat' => $_POST['password-repeat']
                );

                if ($data['Password'] == $data['Password-repeat']) {

                    echo "<table class=\"table-datas-form table-generated-data\">";
                    echo "<tr class=\"table-header\">";

                    foreach ($data as $key => $v) {
                        echo "<th>$key</th>";
                    }
                    echo "</tr>";

                    echo "<tr class=\"odd\">";
                    foreach ($data as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                } else {
                    echo "<p> <span class=\"focus\"> Passwords is not equal! </span> </p> ";
                }
            }
            ?>
        </div>

        <div class="list-labs">

            <p><a href="ivanochko_lab4.php">Назад</a></p>
        </div>
    </div>

</body>

</html>