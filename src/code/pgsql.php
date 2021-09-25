<?php
try {
    $db = new PDO('pgsql:host=pgsql;', 'root', 'toor');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $sql = 'SELECT name,pass FROM users WHERE name=\'' . $_GET["input"] . '\';';
    $result = $db->query($sql);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>pgsql</title>
</head>

<body>
    <form method="GET">
        <p>plz input <span style="color:red;">'</span></p>
        name <input type="text" name="input" size="50" id="input">
        <input type="submit" value="送信">
    </form>
    <hr>
    <?
    echo "<p>$sql</p><table border=\"1\"><tr><th>name</th><th>pass</th>";
    if (!empty($result)) {
        foreach ($result as $value) {
            echo "<tr><td>" . $value["name"] . "</td><td>" . $value["pass"] . "</tt></tr>";
        }
    }
    ?>
    </table>
</body>

</html>