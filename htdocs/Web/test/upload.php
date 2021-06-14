<html>

<head>
    <?php require("../config.php") ?>
</head>

<body>


    <form enctype="multipart/form-data" action="ivanochko_test.php" method="POST">
        File: <input name="userfile" type="file" required /><br>
        <input type="submit" name="submit" value="Send!" />
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        if ($_FILES['userfile']['size'] > 50000000) {
            echo "The file is too large!";
        } else {
            $name = basename($_FILES['userfile']['name']);
            
            $path = pathinfo($_SERVER['SCRIPT_FILENAME'])['dirname'];
            
            $path .= '/files';
            
            move_uploaded_file($_FILES['userfile']['tmp_name'], $path . '/' . $name);
            
            echo "File uploaded to $path/$name <br>";
            echo "Size of file: " . ($_FILES['userfile']['size'] / 1000) . " KB";
        }
    }
    ?>
</body>

</html>