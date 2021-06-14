<html>

<head>
    <?php require("../config.php");
    include_once("../db.php");
    ?>
    <link rel="stylesheet" href="../css/vegetables.css">
</head>

<body>
    <div class="main">
        <?php
        require("ivanohko_check_regime.php");
        $regime = $_SESSION["regime"];
        ?>
        <h1 class="header header-shop-vegetables">Інтернет магазин овочів (Іваночко В. В.)</h1>

        <?php
        $_SESSION['regime'] = 0;
        $_SESSION['login'] = "";

        echo "Ви успішно вийшли!<br>";
        ?>
        
        <div class="list-labs">
            <p><a href="ivanochko_main_page.php">На головну</a></p>
        </div>

    </div>


</body>

</html>