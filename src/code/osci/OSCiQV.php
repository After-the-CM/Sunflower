<p>plz input <span style="color:red;">;sleep 5</span></p>
<form method="get">
    <input type="text" name="input">
    <input type="submit">
</form>
<?php
print "<p>current input: " . $_GET["input"] . "</p>";
exec("cat " . $_SERVER['DOCUMENT_ROOT'] . $_GET["input"], $output);
foreach ($output as $line) {
    print($line);
}
