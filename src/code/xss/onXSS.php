<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ref XSS</title>
</head>

<body>
    <p>plz input <span style="color:red;">" onmouseover="alert(1)"</span></p>
    <form>
        input <input type="text" name="input" size="50" id="input" value="<? if (strpos($_GET["input"], "<script") === false) {
                                                                                print $_GET["input"];
                                                                            } ?>">
        <input type="submit" value="送信">
    </form>
    <hr>
    <?
    if (!empty($_GET["input"])) {
        print htmlspecialchars($_GET["input"]);
    }
    ?>
    </table>
</body>

</html>