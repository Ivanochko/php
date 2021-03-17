<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #5</h1>
        <div class="result">
            <?php
            $filepath = 'files/';
            $filename = "ivanochko_tag2.txt";
            $file = fopen($filepath . $filename, "r") or die("Can not open the file!");;

            $tags = array();
            while (!feof($file)) {
                $temp = fgets($file);
                $temp = explode("> ", str_replace("<", "", $temp));
                $tags[$temp[0]] = $temp[1];
            }
            fclose($file);

            echo "<table class=\"created-table table-files\">";
            $count_tags = 1;
            foreach ($tags as $tag => $description) {
                if ($count_tags % 2)
                    echo "<tr class=\"odd\">";
                else
                    echo "<tr class=\"even\">";

                echo "<td>$count_tags.</td><td>&lt;" . str_replace("<", "&lt;", $tag) . "&gt;</td><td>$description</td></tr>";

                $count_tags++;
            }
            echo "</table>";
            $count_tags--;

            $file_out = fopen('files/out.txt', 'w+');
            fputs($file_out, "Всього в файлі $filename описано $count_tags тегів");
            fseek($file_out, 0);
            $result = fgets($file_out);
            echo "<p>$result</p>";
            fclose($file_out);
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab5.php">Назад</a></p>
        </div>
    </div>

</body>

</html>