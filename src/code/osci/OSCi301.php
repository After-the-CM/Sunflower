<?
session_start();
print "<p>current session: " . $_SESSION["input"] . "</p>";
exec("echo " . $_SESSION["input"], $output);
foreach ($output as $line) {
    print($line);
}
