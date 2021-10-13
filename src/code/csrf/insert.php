<?php
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
} ?>
<script>
    location = "/csrf/"
</script>
<p>plz set referer <span style="color:red;">http://hogehoge.com</span></p>