<?php 
    session_start();
    require_once("const.php");
    require_once("functions.php");
    logOut();
    redirectToLogin();
?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link  type="text/css" rel="stylesheet" href="styles.css" />
</head>
<body>
<h1>Logout !</h1>

<?php 
    logOut();
?>
<br />

</table>
</body>
</html>
