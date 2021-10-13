<?php
try {
    $db = new PDO('mysql:host=mysql;dbname=sunflower', 'user', 'pass');
    $sql = 'SELECT name,memo FROM memos;';
    $result = $db->query($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>csrf</title>
</head>

<body>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>name</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>memo</td>
                <td>
                    <input type="text" name="memo">
                </td>
            </tr>
        </table>
        <input type="submit" value="送信">
    </form>
    <hr>
    <table border="1">
        <tr>
            <th style="width: 200px">name</th>
            <th style="width: 500px">memo</th>
        </tr>
        <?
        foreach ($result as $value) {
            print "<tr><td>$value[name]</td><td>$value[memo]</td></tr>";
        }
        ?>
    </table>
</body>

</html>