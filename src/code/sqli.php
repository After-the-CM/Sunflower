<?php

if (strpos($_GET["input"],"'") !== false) {
    header('HTTP/1.1 500 Internal Server Error');
    exit;
}

try {
    $db = new PDO('mysql:host=mysql;dbname=sunflower', 'user', 'pass');
    $sql = 'SELECT name,pass FROM users WHERE name=\'' . $_GET["input"] . '\';';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>mysql</title>
</head>

<body>
    <form method="GET">
        name <input type="text" name="input" size="50" id="input">
        <input type="submit" value="送信">
    </form>
    <hr>
    <?
    echo "<table border=\"1\"><tr><th>name</th><th>pass</th>";
    foreach ($result as $value) {
        echo "<tr><td>$value[name] </td><td>$value[pass]</tt></tr>";
    }
    ?>
    </table>
</body>

</html>