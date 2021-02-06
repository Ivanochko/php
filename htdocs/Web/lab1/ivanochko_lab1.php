<?php


require("../config.php");
//include_once("../db.php");
include_once("../function.php");
// header("Content-Type: text/html; charset=".$config{'charset'});
if (!empty($_GET["zm"])) {echo "Ім'я переданої змінної ".$_GET["zm"];} else {echo "zminna not fount";}
$zm=$_GET["zm"];

echo "<a href=example1_1_5_1.php><H1> <p>1.1.5_1 Доступ до змінних форми post</p></H1></a>";
echo "<a href=example1_1_5_2.php><H1> <p>1.1.5_2 Доступ до змінних форми get</p></H1></a>";
?>
