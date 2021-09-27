<p>plz redirect to <span style="color:red;">?input=;ls</span></p>
<?php
print "<p>current input: " . $_GET["input"] . "</p>";
exec("cat " . $_SERVER['DOCUMENT_ROOT'] . $_GET["input"], $output);
foreach ($output as $line) {
    print($line);
}
