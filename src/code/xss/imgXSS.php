<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ref XSS</title>
</head>

<body>
    <p>plz input <span style="color:red;">&lt;img src="x" onerror="alert(1)"&gt;</span></p>
    <form method="GET">
        input <input type="text" name="input" size="50" id="input">
        <input type="submit" value="送信">
    </form>
    <hr>
    <?
    if (!empty($_GET["input"])) {
        if (strpos($_GET["input"], "<script") === false) {
            print $_GET["input"];
        }
    }
    ?>
    </table>
</body>

</html>