<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ref XSS</title>
</head>

<body>
    <p>plz input <span style="color:red;">"&gt;&lt;script&gt;alert(1)&lt;/script&gt;</span></p>
    <form method="POST">
        input <input type="text" name="input" size="50" id="input" value="<? print $_POST["input"] ?>">
        <input type="submit" value="送信">
    </form>
    <hr>
    <?
    if (!empty($_POST["input"])) {
        print htmlspecialchars($_POST["input"]);
    }
    ?>
    </table>
</body>

</html>