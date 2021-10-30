<?
if (isset($_GET["url"])) {
    header('Location: ' . $_GET["url"]);
}
?>
<p>plz redirect <span style="color:red;">?url=a%0D%0ASet-Cookie: Himawari=pwned;</span></p>