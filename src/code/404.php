<p>plz redirect to <span style="color:red;">/a;sleep 5</span></p>
<?php
print "<p>current url.Path: " . urldecode($_SERVER['REQUEST_URI']). "</p>";
exec("cat " . $_SERVER['DOCUMENT_ROOT'] . urldecode($_SERVER['REQUEST_URI']), $output);
foreach ($output as $line) {
    print($line);
}