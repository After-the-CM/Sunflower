<p>plz redirect to <span style="color:red;">?;sleep 5;=a</span></p>
<form method="get">
    <input type="text" name="input">
    <input type="submit">
</form>
<?php
print "<p>current url.RawQuery: " . urldecode($_SERVER['QUERY_STRING']) . "</p>";
exec("cat " . $_SERVER['DOCUMENT_ROOT'] . urldecode($_SERVER['QUERY_STRING']), $output);
foreach ($output as $line) {
    print($line);
}
