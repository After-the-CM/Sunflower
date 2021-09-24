<?php
try {
    $db = new PDO('sqlsrv:Server=mssql;database=sunflower', 'sa', 'P@ssw0rd');
    $sql = 'SELECT name,pass FROM users WHERE name=\'' . $_GET["input"] . '\';';
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>mssql</title>
</head>

<body>
    <form method="GET">
        name <input type="text" name="input" size="50" id="input"><br>
        <input type="button" onclick="document.getElementById('input').value = '\'or 1=1\;--';" value="attack"><input type="submit" value="送信">
    </form>
    <hr>
    <?
    echo "<p>$sql</p><table border=\"1\"><tr><th>name</th><th>pass</th>";
        foreach($db->query($sql) as $row) {
            echo("<tr><td>" . $row["name"] . "</td><td>" . $row["pass"]. "</tt></tr>");
        }
    ?>
    </table>
</body>

</html>