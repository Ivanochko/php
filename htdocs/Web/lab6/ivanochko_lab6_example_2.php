<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #2</h1>
        <div class="result" id="result6_2">

            <?php
            $text = open_and_read_file("text.txt");
            out_wrapped("Readed text: ");
            out_wrapped($text, "pre", '');

            echo "<hr>";
            $pattern = "/&lt;([a-z]+)&gt;/i";
            preg_match_all($pattern, $text, $matches);
            out_wrapped("Tags in text without brackets:");
            echo "<br>";

            foreach ($matches[0] as $tag) {
                for ($i = 4; $i < strlen($tag) - 4; $i++) 
                    echo $tag[$i];
                echo ", ";
            }
            echo "<hr>";

            $pattern = "/&lt;[a-z]+&gt;/i";
            $matches = array();
            preg_match_all($pattern, $text, $matches);

            out_wrapped("Tags in text:");
            echo "<br>";
            out_array($matches[0]);
            echo "<hr>";
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab6.php">Назад</a></p>
        </div>
    </div>

</body>

</html>