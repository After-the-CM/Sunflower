<p>plz POST <span style="color:red;">hoge;ls</span></p>
<?php
$body = file_get_contents("php://input");
print "<p>current Body: " . urldecode($body) . "</p>";
exec("echo " . urldecode($body), $output);
foreach ($output as $line) {
    print($line);
}
