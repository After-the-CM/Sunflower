<p>plz input <span style="color:red;">a;sleep 5</span></p>
<form method="post">
    <input type="text" name="input">
    <input type="submit">
</form>
<?php
print "<p>current Body: " . $_POST["input"] . "</p>";
exec("echo " . $_POST["input"], $output);
foreach ($output as $line) {
    print($line);
}
