<?
session_name("oscisession");
session_start();

if (isset($_POST["name"]) && isset($_POST["pass"])) {
    session_destroy();
    session_start();
    if ($_POST["name"] == "yoden" && $_POST["pass"] == "pass") {
        $_SESSION["name"] = "yoden";
        $_SESSION["pass"] = "pass";
    }
}

if (isset($_SESSION["name"])) {
    header("Location: /osci/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <p>yoden:pass</p>
    <form method="post">
        <input type="text" name="name">
        <input type="text" name="pass">
        <input type="submit">
    </form>
</body>

</html>