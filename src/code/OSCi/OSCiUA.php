<p>plz set User-Agent to <span style="color:red;">a;sleep 5</span></p>
<p><span style="color:red;">(</span>,<span style="color:red;">)</span>が入っていると動きません。</p>
<?php
print "<p>current User-Agent:" . $_SERVER['HTTP_USER_AGENT'] . "</p>";
exec("echo " . $_SERVER['HTTP_USER_AGENT'], $output);
foreach ($output as $line) {
    print($line);
}
?>