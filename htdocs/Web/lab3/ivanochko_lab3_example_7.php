<html>

<head>
</head>

<body class="body">
    <div class="main">
        <!-- <h2 class="header">Завдання #7</h2> -->
        <div class="result">
            <?php
            echo '<p><a href="ivanochko_lab3_example_7.php?n=' . mt_rand(1, 6) . '">Посилання на самого себе!</a></p>';
            // echo '<p> <a href=\"' . mt_rand(1, 6) . '\"> ';
            if (isset($_GET['n'])) {
                switch ($_GET['n']) {
                    case 1:
                        echo '<br>Викликати функцію func1';
                        break;
                    case 2:
                        echo '<br>Викликати функцію func2';
                        break;
                    case 3:
                        echo '<br>Викликати функцію func3';
                        break;
                    default:
                        echo "Некоректні дані!";
                        break;
                }
                require("../config.php");
            } else {
                echo "Відсутнє число";
            } 
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab3.php">Назад</a></p>
        </div>
    </div>

</body>

</html>