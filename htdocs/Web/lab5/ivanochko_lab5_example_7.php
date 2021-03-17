<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #7</h1>
        <div class="result" id="result4_6">
            <?php
            $file = fopen("files/ivanochko_text.txt", 'r');
            // Read text from file
            $file_text = read_file($file);
            fclose($file);
            // Out text from file
            out_wrapped("Readed text:");
            echo "<br>";

            out_wrapped($file_text, "pre");

            $file_text = str_remove_double_whitespace($file_text);

            out_wrapped("Deleted double whitespaces:");
            echo "<br>";

            echo $file_text;
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab5.php">Назад</a></p>
        </div>
    </div>
</body>

</html>