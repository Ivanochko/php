<?php
// guest = 0
// buyer = 1
// admin = 2
// session_destroy();
session_start();
$regime = 0;
$login = "";
echo "<div class=\"regime-shop\">";
echo "    <div class=\"info\">";
echo "        <span>";

if (!isset($_SESSION['regime'])) {
    ini_set('session.cookie_lifetime', 0);
    $_SESSION['regime'] = $regime;
    $_SESSION['login'] = $login;
} else {
    $regime = $_SESSION['regime'];
    $login = $_SESSION['login'];
}
$text = "";

switch ($regime) {
    case 0:
        $text = "Гостьовий режим!";
        break;
    case 1:
        $text = "Ви увійшли як покупець:<br>$login";
        break;
    case 2:
        $text = "Ви увійшли як адмін:<br>$login";
        break;
    default:
        break;
}
echo "            $text";
echo "        </span>";
echo "    </div>";
echo "    <div class=\"button\">";
if ($regime == 0) {
    echo "        <a href=\"ivanochko_authorize.php\" class=\"action-change-regime\">Увійти</a>";
} else {
    echo "        <a href=\"ivanochko_exit.php\" class=\"action-change-regime\">Вийти</a>";
}
echo "    </div>";
echo "</div>";
