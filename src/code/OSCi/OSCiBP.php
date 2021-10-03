<p>plz POST <span style="color:red;">a;sleep 5</span></p>
<form method="post">
    <input type="text" name="hoge">
    <input type="submit">
</form>
<?php
$body = file_get_contents("php://input");
print "<p>current Body: " . urldecode($body) . "</p>";
exec("echo " . urldecode($body), $output);
foreach ($output as $line) {
    print($line);
}
