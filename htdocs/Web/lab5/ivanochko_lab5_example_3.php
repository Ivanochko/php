<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #3</h1>
        <div class="result" id="result5_3">
            <form enctype="multipart/form-data" action="ivanochko_lab5_example_3.php" method="POST">
                Max size of file is 5000KB <br>
                Send this file: <input name="userfile" type="file" required /><br>
                <input type="submit" name="submit" value="Send file" />
            </form>
            <?php
            if (isset($_POST['submit'])) {
                if ($_FILES['userfile']['size'] > 5000000) {
                    echo "The file is too large!";
                } else {
                    $name = basename($_FILES['userfile']['name']);
                    $path = pathinfo($_SERVER['SCRIPT_FILENAME'])['dirname'];
                    $pathfile = '';
                    if (str_contains($path, '/')) {
                        $pathfile = $path . '/files/';
                    } else {
                        $pathfile = $path . '\\files\\';
                    }
                    move_uploaded_file($_FILES['userfile']['tmp_name'], $pathfile . $name);
                    echo "File uploaded to $pathfile$name <br>";
                    echo "Size of file: " . ($_FILES['userfile']['size'] / 1000) . " KB";
                }
            }
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab5.php">Назад</a></p>
        </div>
    </div>

</body>

</html>