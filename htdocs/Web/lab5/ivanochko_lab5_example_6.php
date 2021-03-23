<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php require("../config.php") ?>
    <?php require("ivanochko_functions_lab5.php") ?>
    <script>
        $(document).ready(function() {
            var showed = 0;
            for (let index = 0; index < 6; index++) {
                if (index != showed)
                    $("#div5_6_task" + index).hide();
            }
            $(".button5_6_task").click(function() {
                $("#div5_6_task" + showed).hide();
                let index = $(this).attr('id').slice(-1);
                if (showed == index) {
                    showed = 0;
                } else
                    showed = index;
                $("#div5_6_task" + showed).show();
            });

        });
    </script>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #6</h1>
        <div class="block-buttons-task">
            <?php
            for ($i = 1; $i < 6; $i++) {
                echo "<input type=\"button\" value=\"Show task $i\" class=\"button5_6_task\" id=\"button5_6_task$i\">";
            }
            ?>
        </div>
        <div class="result" id="result5_6">
            <?php
            echo "<div class=\"div5_6_task\" id=\"div5_6_task0\"> ";
            echo "<br>";
            out_wrapped("Click on any button to show the task!");
            echo "</div>";
            /////////////////////////////////////////////////////////////////////
            echo "<div class=\"div5_6_task\" id=\"div5_6_task1\"> ";
            echo "<hr class=\"horisontal5_6\">";
            out_wrapped("Task 1", "span", "focus task");
            echo "<br>";

            task1();

            echo "<hr class=\"horisontal5_6\">";
            echo "</div>";
            /////////////////////////////////////////////////////////////////////
            echo "<div class=\"div5_6_task\" id=\"div5_6_task2\"> ";

            echo "<hr class=\"horisontal5_6\">";
            out_wrapped("Task 2", "span", "focus task");
            echo "<br>";

            task2();

            echo "<br>";
            echo "<hr class=\"horisontal5_6\">";
            echo "</div>";
            /////////////////////////////////////////////////////////////////////
            echo "<div class=\"div5_6_task\" id=\"div5_6_task3\"> ";
            echo "<hr class=\"horisontal5_6\">";
            out_wrapped("Task 3", "span", "focus task");
            echo "<br>";

            task3();

            echo "<hr class=\"horisontal5_6\">";
            echo "</div>";
            /////////////////////////////////////////////////////////////////////
            echo "<div class=\"div5_6_task\" id=\"div5_6_task4\"> ";
            echo "<hr class=\"horisontal5_6\">";
            out_wrapped("Task 4", "span", "focus task");
            echo "<br>";

            task4();

            echo "<hr class=\"horisontal5_6\">";
            echo "</div>";
            /////////////////////////////////////////////////////////////////////
            echo "<div class=\"div5_6_task\" id=\"div5_6_task5\"> ";
            echo "<hr class=\"horisontal5_6\">";
            out_wrapped("Task 5", "span", "focus task");
            echo "<br>";

            task5();

            echo "<hr class=\"horisontal5_6\">";
            echo "</div>";
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab5.php">Назад</a></p>
        </div>
    </div>

</body>

</html>