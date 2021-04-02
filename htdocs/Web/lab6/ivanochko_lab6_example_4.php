<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #4</h1>
        <div class="result">
            <?php
            $dates_file = fopen("dates.txt", 'r');
            $dates_array = array();
            while (!feof($dates_file))
                array_push($dates_array, str_replace("\r\n", "", fgets($dates_file)));

            fclose($dates_file);

            $pattern_first = "/(\d{2})-(\d{2})-(\d{4})/";
            $pattern_second = "/(\d{4})-(\d{2})-(\d{2})/";

            $dates_array_result = array();

            foreach ($dates_array as $date) 
                if (preg_match($pattern_first, $date)) {
                    $replacement = "$2.$1.$3";
                    array_push($dates_array_result, preg_replace($pattern_first, $replacement, $date));
                } elseif (preg_match($pattern_second, $date)) {
                    //$replacement = "$2.$3.$1";
                    //array_push($dates_array_result, preg_replace($pattern_second, $replacement, $date));
                    array_push($dates_array_result, $date);
                } else 
                    echo "That not match with any pattern!";

            out_wrapped("Readed dates!<br>");
            out_array($dates_array);
            echo "<hr>";
            out_wrapped("Replaced dates!<br>");
            out_array($dates_array_result);
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab6.php">Назад</a></p>
        </div>
    </div>

</body>

</html>