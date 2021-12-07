<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>

<body>
    <p>plz input <span style="color:red;">&lt;script&gt;alert(1)&lt;/script&gt;</span></p>
    <form method="POST">
        input <input type="text" name="input" size="50" id="input">
        <input type="submit" value="送信">
    </form>
<?
if (!empty($_POST["input"])) {
        print $_POST["input"];
    }

?>
   <hr>
    <?
    $current = file_get_contents('/tmp/log');
    $current .= $_POST["input"];
    file_put_contents('/tmp/log', $current);
    ?>
    </table>
</body>

</html>
