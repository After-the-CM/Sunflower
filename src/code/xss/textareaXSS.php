<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ref XSS</title>
</head>

<body>
    <p>plz input <span style="color:red;">&lt;/textarea&gt;&lt;script&gt;alert(1)&lt;/script&gt;</span></p>
    <form method="POST">
        <textarea name="input" id="" cols="30" rows="10"><? print $_POST["input"]?></textarea>
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