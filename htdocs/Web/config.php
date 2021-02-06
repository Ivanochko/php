<?php
$config['charset'] = 'utf-8';
$config['default_lng'] = 'ua';

$config['host_name'] = 'http://93.184.216.34/htdocs/Web/';
// $config['hot_name'] = 'http://ivanochko.ezyro.com/Web';

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

date_default_timezone_set('Europe/Kiev');
// date.timezone = 'Europe/Kiev';

$LastModified_unix = strtotime(date("D, d M Y H:i:s", (filectime($_SERVER['SCRIPT_FILENAME'])))) + 7200;
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
echo "Last modified: $LastModified" . "<br>";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Програмування мовою РНР</title>
    <!-- Headers -->
    <meta name='keywords' content='' />
    <meta name='description' content='' />
    <meta http-equiv='Content-Type' content='text/html' charset='utf-8'>

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">

    <!-- Scripts -->
    <script type='text/javascript' src='/Proga/Web/js/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='/Proga/Web/js/my.js'></script>

</head>