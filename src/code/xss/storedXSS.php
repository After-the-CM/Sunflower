<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>stored XSS</title>
</head>

<body>
    <?
    print file_get_contents('log');
    ?>
    </table>
</body>

</html>