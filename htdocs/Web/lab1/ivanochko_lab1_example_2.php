<html>

<head>
    <?php
    require("../config.php");
    ?>
</head>

<body class="body">
    <div class="main">
        <h2 class="header">Оператор switch</h2>
        <form action="ivanochko_lab1_example_2.php" method="post" id="form-second-example" class="form-example">
            Day of week: <br>
            <div id="day-of-week-block">
                <input type="radio" name="day-of-week" id="monday" value="Monday">
                <label for="monday" class="day-of-week">Monday</label> <br>
                <input type="radio" name="day-of-week" id="tuesday" value="Tuesday">
                <label for="tuesday" class="day-of-week">Tuesday</label> <br>
                <input type="radio" name="day-of-week" id="wednesday" value="Wednesday">
                <label for="wednesday" class="day-of-week">Wednesday</label> <br>
                <input type="radio" name="day-of-week" id="thursday" value="Thursday">
                <label for="thursday" class="day-of-week">Thursday</label> <br>
                <input type="radio" name="day-of-week" id="friday" value="Friday">
                <label for="friday" class="day-of-week">Friday</label> <br>
                <input type="radio" name="day-of-week" id="saturday" value="Saturday">
                <label for="saturday" class="day-of-week">Saturday</label> <br>
                <input type="radio" name="day-of-week" id="sunday" value="Sunday">
                <label for="sunday" class="day-of-week">Sunday</label> <br>
            </div>
            <input type="submit" name="submit" value="Button to submit.">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            if (isset($_POST['day-of-week'])) {
                $day = $_POST['day-of-week'];
                // echo $course;
                echo "There is $day" . "<br>" . "<span class=\"focus\">";
                switch ($day) {
                    case 'Monday':
                        echo "Start of week!";
                        break;
                    case 'Tuesday':
                        echo "That is so long to Friday";
                        break;
                    case 'Wednesday':
                        echo "Middle of work week!";
                        break;
                    case 'Thursday':
                        echo "Last day before Friday!";
                        break;
                    case 'Friday':
                        echo "Yeeeah its Friday! Go home!";
                        break;
                    case 'Saturday':
                        echo "Omg, I can go walk";
                        break;
                    case 'Sunday':
                        echo "Monday is coming!";
                        break;
                    default:
                        echo "Something goes wrong";
                        break;
                }
                echo "</span>";
            } else {
                echo "Please, set a value";
            }
        }
        ?>
        <div class="list-labs">
            <p><a href="ivanochko_lab1.php">Назад</a></p>
            <?php require("../last_modifiend.php"); ?>
        </div>
    </div>
</body>

</html>