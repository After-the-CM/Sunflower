<?php
try {
    $db = new PDO('mysql:host=mysql;dbname=sunflower', 'user', 'pass');
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
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
    <p>plz input <span style="color:red;">' or sleep(10)#</span></p>
    <form method="GET">
        name <input type="text" name="input" size="50" id="input">
        <input type="submit" value="送信">
    </form>
    <hr>
    <?
    echo "<p>$sql</p><table border=\"1\"><tr><th>name</th><th>pass</th>";
    foreach ($result as $value) {
        echo "<tr><td>$value[name] </td><td>$value[pass]</tt></tr>";
    }
    ?>
    </table>
</body>

</html>