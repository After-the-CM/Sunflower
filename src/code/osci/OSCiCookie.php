<p>plz set cookie <span style="color:red;">input=;sleep 5</span></p>
<?php
print "<p>current Cookie: " . $_COOKIE["input"] . "</p>";
exec("echo " . $_COOKIE["input"], $output);
foreach ($output as $line) {
    print($line);
}
