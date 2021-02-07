<?php

$LastModified_unix = strtotime(date("D, d M Y H:i:s", (filectime($_SERVER['SCRIPT_FILENAME'])))) + 7200;
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
echo "<br>"."Last modified: $LastModified" . "<br>";
