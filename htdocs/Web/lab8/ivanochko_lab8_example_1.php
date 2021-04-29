<html>

<head>
    <?php
    require("../config.php");
    include_once("../db.php");
    ?>
</head>

<body>
    <div class="main">
        <div class="result">
            <?php

            $mysqli = open_connection();

            mysqli_query($mysqli, "DROP TABLE dusc");
            mysqli_query($mysqli, "CREATE TABLE dusc(id INTEGER PRIMARY KEY AUTO_INCREMENT,name_d VARCHAR(200) UNIQUE ,key_concepts TEXT)");
            mysqli_query($mysqli, "INSERT into dusc (name_d, key_concepts) values ('Основи інтернет','HTML, CSS, Java script, WWWW')");
            mysqli_query($mysqli, "INSERT into dusc (name_d, key_concepts) values ('PHP','Пролог, Моделювання')");
            mysqli_query($mysqli, "INSERT into dusc (name_d, key_concepts) values ('JAVA','OOP, MVC, Hibernate')");
            $name = 'PHP';
            $key1 = 'Database, echo, arrays, objects';
            $res1 = mysqli_query($mysqli, "UPDATE dusc set key_concepts='$key1' where name_d='$name'");
            echo "<i>Вибірка з таблиці dusc<p></i>";
            $k = 1;
            $result = mysqli_query($mysqli, "SELECT id,name_d, key_concepts FROM dusc");
            echo "<table>";
            echo "<tr><td>ID</td><td> Назва лекції </td><td> Ключовi поняття </td></tr>";
            while ($row = mysqli_fetch_row($result)) {
                $id[$k] = $row[0];
                echo "<tr><td>$id[$k]</td><td>$row[1]</td><td>$row[2]</td></tr>";
                $k++;
            }
            echo "</table>";
            mysqli_close($mysqli);
            ?>
        </div>
        <div class="list-labs">
            <p><a href="ivanochko_lab8.php">Назад</a></p>
        </div>
    </div>
</body>

</html>