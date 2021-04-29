<html>

<head>
    <?php require("../config.php");
    require("../db.php"); ?>
    <link rel="stylesheet" href="../css/thumb.css" type="text/css">
    <script>
        $(document).ready(function(){
            $(".value-count").change(function(){
                var id = parseInt(this.id.slice(this.id.lastIndexOf("-") + 1));

                var count = $("#value-count-" + id).val();
                var price = $("#price-for-one-" + id).val();

                $("#sum-price-value-" + id).val(count*price);

                var countOnStorage = parseInt($("#count-value-" + id).text());

                if (count > countOnStorage) {
                    $("#buy-" + id).prop("disabled", true); 
                    $("#buy-" + id).attr("title", "Buy is blocked, invalid count!");
                    $("#buy-" + id).addClass("not-allowed-cursor");
                }else{
                    $("#buy-" + id).prop("disabled", false); 
                    $("#buy-" + id).removeClass("not-allowed-cursor");
                }
            });
        });
    </script>
</head>

<body>
    <div class="main">
        <h1 class="header">Завдання #3</h1>
        <?php
        $mysqli = open_connection();

        if (isset($_POST['renew']) || isset($_POST['buy'])) {
            $changed = $_GET['changed'];
            $count = 0;
            if ($result = mysqli_query($mysqli, "SELECT count FROM `Fruits` WHERE id = $changed")) {
                $count = mysqli_fetch_assoc($result)['count'];

                mysqli_free_result($result);

                if (isset($_POST['renew'])) {
                    $count += $_POST['value-count'];
                }else{
                    $count -= $_POST['value-count'];
                    if ($count < 0) {
                        $count = 0;
                    }
                }

                mysqli_query($mysqli, "UPDATE `Fruits` SET count = $count WHERE id = $changed");
            }
        }

        if ($result = mysqli_query($mysqli, 'SELECT id, name, photo, count, in_wikipedia, price FROM `Fruits`')) {
            echo "<div id=\"all-container-fruits\">";
            echo " <div id=\"products\">";
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $count = $row['count'];
                $photo = $row['photo'];
                $in_wikipedia = $row['in_wikipedia'];
                $price = $row['price'];

                if ($id % 2) {
                    echo "<div class=\"one-product odd\">";
                } else {
                    echo "<div class=\"one-product even\">";
                }

                echo "<div class=\"number-fruit\"><div>";
                echo "<span>$id</span>";
                echo "</div></div>";

                echo "<div class=\"product-specification\">";

                echo "<div class=\"photo-fruit\">";

                echo "<div class=\"thumbs\">";

                echo "<a href=\"$in_wikipedia\" target=\"_blank\">";
                echo "<img src=\"fruits/$photo\" alt=\"$name photo\"/>";
                echo "<div class=\"caption\">";

                echo "<span class=\"title\">Click on the photo</span>";
                echo "<span class=\"\">To open state about $name on wikipedia</span>";

                // close - caption
                echo "</div>";
                echo "</a>";
                // close - thumbs
                echo "</div>";
                // close - photo-fruit
                echo "</div>";
                // echo "</div>";


                echo "<div class=\"name-fruit\">";
                echo "<span>$name</span>";
                echo "</div>";


                echo "<div class=\"count-fruits\">";
                echo "<div class=\"count-text\">Count on storage:</div>";
                echo "<div class=\"count-value\" id=\"count-value-$id\">$count</div>";
                echo "</div>";

                echo "<div class=\"sum-price\">";
                echo "<div><span>Price for one fruit:</span><br>";
                echo "<input type=\"text\" value=\"$price\" id=\"price-for-one-$id\" class=\"prices\" readonly></div>";
                echo "<div><span>Sum price fot count:</span><br>";
                echo "<input type=\"text\" value=\"0\" id=\"sum-price-value-$id\" class=\"prices\" readonly></div>";
                echo "</div>";

                echo "<form class=\"buttons\" method=\"post\" action=\"ivanochko_lab8_example_3.php?changed=$id\">";

                echo "<div class=\"set-count-text\">";
                echo "Enter number of products:";
                echo "</div>";

                echo "<div class=\"set-count\">";
                echo "<input type=\"number\" class=\"value-count\" name=\"value-count\" id=\"value-count-$id\" min=\"0\" required>";
                echo "</div>";

                echo "<div class=\"button-renew button\">";
                echo "<input type=\"submit\" name=\"renew\" value=\"Renew\">";
                echo "</div>";

                echo "<div class=\"button-buy button\">";
                echo "<input type=\"submit\" name=\"buy\" id=\"buy-$id\" value=\"Buy\">";
                echo "</div>";


                // close - buttons
                echo "</form>";

                // close - product-specification
                echo "</div>";
                // close - one-product
                echo "</div>";
            }
            // close - products
            echo "</div>";
            // close - all-product-container
            echo "</div>";

            mysqli_free_result($result);
        } else {
            echo "No results!<br>";
        }

        // echo ""

        mysqli_close($mysqli);
        ?>

        <div class="list-labs">
            <p><a href="ivanochko_lab8.php">Назад</a></p>
        </div>
    </div>


</body>

</html>