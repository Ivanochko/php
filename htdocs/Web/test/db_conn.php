<html>

<head>
    <?php require("../config.php");
    ?>
</head>

<body>

    <?php
    include_once("../db.php"); 
    
    $mysqli = open_connection();
    $query = "";
    if ($result = mysqli_query($mysqli, "$query")) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $date = $row['date'];
        }
        mysqli_free_result($result);
    }
    mysqli_close($mysqli);
    ?>


</body>

</html>