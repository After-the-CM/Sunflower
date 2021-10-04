<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ref XSS</title>
</head>

<body>
    <p>plz input <span style="color:red;">&lt;script&gt;alert(1)&lt;/script&gt;</span></p>
    <form method="GET">
        input <input type="text" name="input" size="50" id="input">
        <input type="submit" value="送信">
    </form>
    <hr>
    <?
    if (!empty($_GET["input"])) {
        print $_GET["input"];
    }
    ?>
    </table>
</body>

</html>