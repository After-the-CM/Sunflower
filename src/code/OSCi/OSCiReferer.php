<p>plz access from <span style="color:red;">http://localhost:18080/;sleep 5</span></p>
<?php
print "<p>current Referer: " .$_SERVER['HTTP_REFERER']. "</p>";
exec("echo " . $_SERVER['HTTP_REFERER'], $output);
foreach ($output as $line) {
    print($line);
}
