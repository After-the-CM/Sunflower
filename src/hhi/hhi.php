<?
if (isset($_GET["url"])) {
    header('Location: ' . $_GET["url"]);
}
?>
<p>plz redirect <span style="color:red;">?url=a%0D%0A%20Set-Cookie: Himawari=pwned</span> (IE Only)</p>