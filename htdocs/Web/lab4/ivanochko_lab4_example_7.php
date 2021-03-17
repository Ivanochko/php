<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Завдання #7</h2>
        <div class="result" id="result4_8">

            <?php
            $questions = array(
                "Скільки разів був заблокований мій хостинг?",
                "Отримувати адресу нового хостингу після блокування цього?",
                "Виберіть домен мого поточного хостингу:",
                "Чого побажаєте автору?"
            );
            if (isset($_POST['submit'])) {
                if (
                    isset($_POST['block-host'])
                    && isset($_POST['alert-block'])
                    && isset($_POST['select'])
                    && isset($_POST['user-wish'])
                    && $_POST['select'] != "null"
                ) {
                    echo '<p>' . $questions[0] . "<br>";
                    echo "<span class=\"focus\">" . $_POST['block-host'] . "</span></p>";
                    echo '<hr class="horisontal"';
                    echo '<p>' . $questions[1] . "<br>";
                    echo "<span class=\"focus\">"; 
                    if ($_POST['alert-block'] == 'on') {
                        echo "Так";
                    }else {
                        echo "Ні";
                    }
                    echo "</span></p>";
                    echo '<hr class="horisontal"';
                    echo '<p>' . $questions[2] . "<br>";
                    echo "<span class=\"focus\">" . $_POST['select'] . "</span></p>";
                    echo '<hr class="horisontal"';
                    echo '<p>' . $questions[3] . "<br>";
                    echo "<span class=\"focus\">";
                    foreach ($_POST['user-wish'] as $val) 
                        echo "$val, ";
                    
                    echo "</span></p>";
                    echo '<hr class="horisontal"';
                } else {    
                    echo "Не всі дані введені! <br>";
                }
                echo " <div class=\"list-labs\">";
                echo "<p><a href=\"ivanochko_lab4_example_7.php\">Спробувати знову!</a></p>";
                echo "</div>";
            } else {
                require('ivanochko_exam7.php');
            }
            ?>
        </div>

        <div class="list-labs">
            <p><a href="ivanochko_lab4.php">Назад</a></p>
        </div>
    </div>

</body>

</html>