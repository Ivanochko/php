<html>

<head>
    <?php require("../config.php") ?>
    <?php require("ivanochko_functions_lab5.php") ?>
    <script>
        $(document).ready(function() {
            var showed = 5;
            for (let index = 0; index < 6; index++) {
                if (index != showed)
                    $("#div5_6_task" + index).hide();
            }
            $(".button5_6_task").click(function() {
                $("#div5_6_task" + showed).hide();
                let index = $(this).attr('id').slice(-1);
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
            <input type="button" value="Show task 1" class="button5_6_task" id="button5_6_task1">
            <input type="button" value="Show task 2" class="button5_6_task" id="button5_6_task2">
            <input type="button" value="Show task 3" class="button5_6_task" id="button5_6_task3">
            <input type="button" value="Show task 4" class="button5_6_task" id="button5_6_task4">
            <input type="button" value="Show task 5" class="button5_6_task" id="button5_6_task5">
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