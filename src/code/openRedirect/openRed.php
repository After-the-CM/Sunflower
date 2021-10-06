<?
if (isset($_GET["url"])) {
    header('Location: ' . $_GET["url"]);
    print '<a href="' . $_GET["red"] . '">redirect</a>';
}
?>
<p>plz redirect <span style="color:red;">?url=//example.com</span></p>