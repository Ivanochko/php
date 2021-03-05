<?php
$config['charset'] = 'utf-8';
$config['default_lng'] = 'ua';

// $config['host_name'] = 'http://93.184.216.34/htdocs/Web/';
$config['host_name'] = 'http://ivanochko.ezyro.com/Web';

$config_host_name = $config['host_name'];

$config['data_dir'] = '/htdocs/Web';

// $config{'dbName'} = "bz";
// $config{'dbHost'} = "localhost";
// $config{'dbPort'} = "5432";
// $config{'dbUser'} = "postgres";
// $config{'dbPasswd'} = "postgres";

$config['LogInFor'] = 3600;
$config['dom_name'] = 'bz';
$config['sess_name'] = 'SPRITE_SESS_ID';
$config['default_theme'] = 'black-style';
$config['email'] = 'vasa.ivanochko.17@gmail.com';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Програмування мовою РНР</title>
    <!-- Meta -->
    <meta name='keywords' content='' />
    <meta name='description' content='' />
    <meta http-equiv='Content-Type' content='text/html' charset='utf-8'>

    <!-- Styles -->
    <?php
    $path_parts = pathinfo($_SERVER['SCRIPT_FILENAME']);
    // host or local
    if ($path_parts['dirname'] == '/home/vol6_7/epizy.com/epiz_28077250/htdocs/Web' 
       || $path_parts['dirname'] == 'D:\Labs\2kurs\2sem\php\htdocs\Web') {
        // styles
        echo '<link rel="stylesheet" href="css/style.css" type="text/css">';
        echo '<link rel="stylesheet" href="css/dark.css" type="text/css" id="theme-link">';
        // scripts
        echo '<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>';
        echo '<script type="text/javascript" src="js/my.js"></script>';
        echo '<script type="text/javascript" src="js/switch_theme.js"></script>';
        // icon
        echo '<link rel="icon" href="img/pc.ico" type="image/x-icon">';
        // functions
        require("function.php");
    } else {
        // styles
        echo '<link rel="stylesheet" href="../css/style.css" type="text/css">';
        echo '<link rel="stylesheet" href="../css/dark.css" type="text/css" id="theme-link">';
        // scripts
        echo '<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>';
        echo '<script type="text/javascript" src="../js/my.js"></script>';
        echo '<script type="text/javascript" src="../js/switch_theme.js"></script>';
        // icon
        echo '<link rel="icon" href="../img/pc.ico" type="image/x-icon">';
        // functions
        require("../function.php");
    } 
    ?>
</head>

<?php
$LastModified_unix = strtotime(date("D, d M Y H:i:s", (filectime($_SERVER['SCRIPT_FILENAME'])))) + 7200;
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
echo "<br>" . "<span class=\"last-modified\">Last modified: $LastModified" . "</span><br>";
// button to change theme
echo ' <div class="theme-button" id="theme-button" title="Натисніть, щоб змінити тему"> </div>';
?>