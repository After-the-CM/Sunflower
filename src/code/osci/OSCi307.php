<p>plz post <span style="color:red;">a;sleep 5</span></p>
<?php
print "<p>current Body: " . $_POST["input"] . "</p>";
exec("echo " . $_POST["input"], $output);
foreach ($output as $line) {
    print($line);
}
