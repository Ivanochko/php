<html>

<head>
    <?php require("../config.php") ?>
    <script>
        $(document).ready(function() {
            var showed = 0;
            
            for (let index = 0; index < 6; index++) {
                if (index != showed)
                    $("#div6_5_task" + index).hide();
            }
            $(".button6_5_task").click(function() {
                $("#div6_5_task" + showed).hide();
                let index = $(this).attr('id').slice(-1);
                if (showed == index) {
                    showed = 0;
                } else
                    showed = index;
                $("#div6_5_task" + showed).show();
            });
        });
    </script>
    <?php

    function task(string $pattern, string $text)
    {
        $sentences = preg_split("/[.!?][ \n]/mu", $text);

        $count = 0;
        $matches = array();
        $words = array();
        $temp_str = "";
        $result_array = array();

        foreach ($sentences as $one) {
            $count = preg_match_all($pattern, $one, $matches);
            if ($count != 0) {
                $words = preg_split("/\s/", $one);

                foreach ($words as $word)
                    if (preg_match_all($pattern, $word) != 0)
                        $temp_str .= "<span class=\"focus\">$word</span> ";
                    else
                        $temp_str .= "$word ";

                $result_array[$temp_str] = $count;
                $temp_str = "";
            }
        }
        arsort($result_array);

        foreach ($result_array as $sentence => $count)
            echo "<br><br>Кількість збігів: $count<br><br>$sentence";
    }

    ?>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #5</h1>
        <div class="block-buttons-task">
            <?php
            $tasks = array("a", "b", "c", "d");
            for ($i = 0; $i < 3; $i++) {
                echo "<input type=\"button\" value=\"Show task " . $tasks[$i] . "\" class=\"button6_5_task\" id=\"button6_5_task" . ($i + 1) . "\">";
            }
            ?>
        </div>
        <div class="result" id="result6_5">
            <?php
            echo "<div class=\"div6_5_task\" id=\"div6_5_task0\"> ";
            echo "<br>";
            out_wrapped("Click on any button to show the task!");
            echo "</div>";
            /////////////////////////////////////////////////////////////////////
            echo "<div class=\"div6_5_task\" id=\"div6_5_task1\"> ";
            echo "<hr class=\"horisontal6_5\">";
            out_wrapped("Task а", "span", "focus task");
            echo "<br>";

            $text = open_and_read_file("text.txt");
            $pattern = "/\bтег[а-яіїє]*\b/iu";
            $matches = array();

            preg_match_all($pattern, $text, $matches);
            echo "Кількість слова 'тег' і всіх його форм в тексті: ";
            out_wrapped(count($matches[0]));
            echo "<br>";
            out_array($matches[0]);

            echo "<hr class=\"horisontal6_5\">";
            echo "</div>";

            /////////////////////////////////////////////////////////////////////
            echo "<div class=\"div6_5_task\" id=\"div6_5_task2\"> ";
            echo "<hr class=\"horisontal6_5\">";
            out_wrapped("Task b", "span", "focus task");
            echo "<br>";

            $pattern = "/\bhtml\b/iu";

            preg_match_all($pattern, $text, $matches);
            echo "Кількість слова 'html' і всіх його форм в тексті: ";
            out_wrapped(count($matches[0]));
            echo "<br>";
            out_array($matches[0]);

            echo "<hr class=\"horisontal6_5\">";
            echo "</div>";

            /////////////////////////////////////////////////////////////////////
            echo "<div class=\"div6_5_task\" id=\"div6_5_task3\"> ";
            echo "<hr class=\"horisontal6_5\">";
            out_wrapped("Task c", "span", "focus task");
            echo "<br>";

            if (isset($_POST['submit_c'])) {

                $fragment = $_POST['word-to-search'];
                $pattern = "/\b[а-яієї\-']*" . $fragment . "[а-яієї\-']*\b/iu";
                task($pattern, $text);

                echo "<br><br>";
                out_wrapped("Спробувати знову?");
                echo "<br>";
            }

            echo "<br>";
            echo "<form action=\"ivanochko_lab6_example_5.php\" method=\"post\" class=\"form-example\">";
            echo "Будь ласка, введіть фрагмент для пошуку в тексті: <br>";
            echo "<input type=\"text\" class=\"input-text\" name=\"word-to-search\" required><br>";
            echo "<input type=\"submit\" value=\"Search!\" name=\"submit_c\">";
            echo "</form>";
            echo "<br>";

            echo "<hr class=\"horisontal6_5\">";
            echo "</div>";
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab6.php">Назад</a></p>
        </div>
    </div>

</body>

</html>