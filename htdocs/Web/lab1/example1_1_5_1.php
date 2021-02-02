
<?php

require("../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});

$variable=$_POST['formvariable'];
echo $variable;
?>
<html>
<head>
<title>Приклад форми Post</title>
</head>
<body>
<form action="example1_1_5_1.php" method="post">
<input type="text" name="formvariable">
<input type="submit" value="Додати">
</form>
</body>
</html>
