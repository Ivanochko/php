<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #4</h1>
        <div class="result">
            <?php
            $file = fopen("files/ivanochko_tag1.txt", "r") or die("Can not open the file!");;

            $tags = array();
            while(!feof($file)){
                $temp = fgets($file);
                $temp = substr($temp, 0, strlen($temp) - 2);
                $tags[$temp] = fgets($file);
            }
            fclose($file);

            echo "<table class=\"created-table table-files\">";
            $index = 0;
            foreach ($tags as $tag => $description) {
                if ($index % 2) 
                    echo "<tr class=\"odd\">";
                else 
                    echo "<tr class=\"even\">";

                echo "<td>&lt;$tag&gt;</td><td>$description.</td></tr>";

                $index++;
            }
            echo "</table>";
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab5.php">Назад</a></p>
        </div>
    </div>

</body>

</html>