<?
session_name("oscisession");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mypage</title>
</head>

<body>
    <?
    if (isset($_SESSION["name"])) {
        print "hello, " . htmlspecialchars($_SESSION["name"]);
    } else {
        print "plz <a href=login.php>login</a>.";
        exit(0);
    }
    ?>
    <form>
        <input type="text" name="input">
        <input type="submit">
    </form>
    <?
    exec("echo " . $_GET["input"], $output);
    ?>
    <p>input: <? foreach ($output as $line) {
                    print($line);
                }
                ?></p>
</body>

</html>