<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #2</h1>
        <form action="ivanochko_lab5_example_2.php" method="post" class="form-example">
            <p style="font-size: 20px;"> Input name of file to search <br>
                <input type="text" name="filename" id="filename" placeholder="filename" required>
            </p>
            <input type="submit" name="submit" value="Check!">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['submit'])) {
                $file = $_POST['filename'];
                echo "<span class=\"focus\">";
                if (file_exists($file)) {
                    if (is_file($file)) {
                        echo "File with name '$file' does exist!  <br></span>";
                        echo "It size is <span class=\"focus\">" . filesize($file) . " byte </span><br>";
                        echo "Last modified of file is <span class=\"focus\">" . date("F d Y H:i:s.", filemtime($file)) . "</span><br>";
                        echo "It is created on <span class=\"focus\">" . date("F d Y H:i:s.", filectime($file)) . "</span><br>";
                        $fp = fopen($file, "r");
                        echo "<pre>";
                        while (!feof($fp)) echo str_replace(">", "&gt;", str_replace("<", "&lt;", (fgets($fp, 1024)))) . "<br>";
                        fclose($fp);
                        echo "</pre>";
                    } elseif (is_dir($file)) {
                        echo "In this directory exist directory with name $file, but not file!";
                    }
                } else {
                    echo "File with name '$file' doesn`t exist!</span>";
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