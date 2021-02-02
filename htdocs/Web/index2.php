<?php


require("config.php");
//include_once("db.php");
include_once("function.php");
header("Content-Type: text/html; charset=".$config{'charset'});
$zm=10;
echo "<a href=lab1/lab1.php?zm=$zm><H1> <p>lab1.php</p></H1></a>";
echo "<a href=lab2/lab2.php><H1> <p>lab2.php</p></H1></a>";

?>

<html>
<title>PHP</title> 
<form>
<table border=0><tr><td>Логін:</td><td><input type='text' name='ULogin'></td><tr>
<tr><td>Пароль:</td><td><input type='password' name='Passw'></td><tr>
<tr><td><input type='submit' value='Go' name='Send'></td><td>&nbsp</td></td></tr> </table>
</form>

</html>
