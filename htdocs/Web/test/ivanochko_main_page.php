<html>

<head>
    <?php require("../config.php");
    include_once("../db.php"); ?>
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

        $products = array(
            array("name" => "Огірок", "price" => 100, "img"=>"img/cucumber.jpg"),
            array("name" => "Помідор", "price" => 50, "img"=>"img/tomatoe.jpg"),
            array("name" => "Картопля", "price" => 30, "img"=>"img/potato.jpg")
        );


        echo "<div class=\"shop-page\">";
        echo "    <div class=\"products\">";
        if ($regime == 2) {
            echo "        <div class=\"admin-actions\">";
            echo "            <div class=\"add\"><a href=\"ivanochko_add_product.php\">Додати товар</a></div>";
            echo "            <div class=\"remove\"><a href=\"ivanochko_remove_product.php\">Видалити товар</a></div>";
            echo "        </div>";
        }
        $id = 0;
        $type = "odd";
        foreach ($products as $product) {
            $name = $product['name'];
            $price = $product['price'];
            $img = $product['img'];

            if ($id % 2 == 0) {
                $type = "odd";
            }else{
                $type = "even";
            }

            echo "        <div class=\"product $type\">";
            echo "            <div class=\"number-product\">";
            echo "                <div><span>$id</span></div>";
            echo "                <div class=\"image\"><img src=\"$img\" alt=\"$name\"></div>";
            echo "            </div>";
            echo "            <div class=\"name\"><span>$name</span></div>";
            echo "            <div class=\"price\">Ціна: <span class=\"focus\"> $price</span> грн</div>";
            if ($regime != 0) {
                $action = "";
                if ($regime == 1) {
                    $action = "Купити!";
                } elseif ($regime == 2) {
                    $action = "Поповнити!";
                }
                echo "            <form action=\"ivanochko_main_page.php?id=$id\" method=\"post\" class=\"action\">";
                echo "                <div class=\"input\"><span>Кількість:</span>";
                echo "                    <input type=\"number\" value=\"0\" min=\"0\" name=\"number-changed-$id\" required><br>";
                echo "                </div>";
                echo "                <div class=\"submit\">";
                echo "                    <input type=\"submit\" value=\"$action\" name=\"$regime\">";
                echo "                </div>";
                echo "            </form>";
            }
            $id++;
            echo "        </div>";
        }
        echo "    </div>";
        echo "</div>";

        ?>

        <div class="list-labs">
            <p><a href="../index.php">Назад</a></p>
        </div>
    </div>

</body>

</html>