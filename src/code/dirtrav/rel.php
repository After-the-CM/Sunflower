<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rel trav</title>
</head>

<body>
    <p>plz input <span style="color:red;">../../../etc/passwd</span></p>
    <form method="GET">
        file <input type="text" name="file" size="50">
        <input type="submit" value="送信">
    </form>
    <?php
    if (isset($_GET['file'])) {
        $file =  $_SERVER['DOCUMENT_ROOT'] . "/" . $_GET['file'];
        include($file);
    }
    ?>
</body>

</html>