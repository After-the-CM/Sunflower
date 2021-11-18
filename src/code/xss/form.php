<?php
if (isset($_POST["name"])) {
    try {
        $db = new PDO('mysql:host=mysql;dbname=sunflower', 'user', 'pass');
        $sql = $db->prepare('INSERT INTO memos values(:name, :memo);');
        $sql->bindValue(':name', $_POST["name"], PDO::PARAM_STR);
        $sql->bindValue(':memo', $_POST["memo"], PDO::PARAM_STR);
        $sql->execute();
        print "submited.";
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
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
</body>

</html>