<?php
$db = new PDO('mysql:host=mysql;dbname=sunflower', 'user', 'pass');

if (isset($_POST["name"])) {
    try {
        $sql = $db->prepare('INSERT INTO memos values(:name, :memo);');
        $sql->bindValue(':name', $_POST["name"], PDO::PARAM_STR);
        $sql->bindValue(':memo', $_POST["memo"], PDO::PARAM_STR);
        $sql->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

try {
    $sql = 'SELECT name,memo FROM memos;';
    $result = $db->query($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>

<body>
    <p>plz input <span style="color:red;">&lt;script&gt;alert(1)&lt;/script&gt;</span></p>
    <form method="POST">
        name <input type="text" name="name" size="50">
        memo <input type="text" name="memo" size="50">
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