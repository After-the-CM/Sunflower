<p>plz POST <span style="color:red;">input=a;ls</span></p>
<?php
print "<p>current Body: " . $_POST["input"] . "</p>";
exec("echo " . $_POST["input"], $output);
foreach ($output as $line) {
    print($line);
}
