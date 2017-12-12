<?php 
    session_start();

    require_once("const.php");
    require_once("functions.php");
    
    $isLogin = isAnyUserLoggedIn();

    if(!isAnyUserLoggedIn()){
        // header("Location: login.php");
        // die("need to login");
        redirectToLogin();
    }

    $userName = getLoggedUsernamefromSession();
    
    $Connection = getConnection(DB);
    $results = getDbRowsAsArray($Connection, "Select * from " . TABLE_USER);
    //echo "</br><pre>" ;print_r( $results ) ;echo "</pre></br>" ; die(); 
    $count_rows = count($results);
?>
<!DOCTYPE html>
<html>
<head>
    <title>internal page for login users</title>
    <link  type="text/css" rel="stylesheet" href="styles.css" />
</head>
<body>

    <h2>Internal Page for registed users (Edit User)!</h>
    <h3>Currently loggin with 
    <?php 
        echo $userName;
    ?> 
    </h3>
    <h4 class="green message" id="placeholder"></h4>
    <form onsubmit="event.preventDefault();formSubmit(this);" name="userForm">
        <label>Full Name : </label>    
        <input type="text" name="fullname" placeholder="FullName"/> <br />
        <input type="hidden" name="username" placeholder="username" value="<?php echo $userName; ?>"/> <br />
        <label>Description : </label>            
        <input type="text" name="description" placeholder="Description"/> <br />
        <input type="submit" value="Save"/> <a href="logout.php">Logout</a>
    </form>
    
    <script type="text/javascript" src="editUser.js"></script>

</table>
</body>
</html>
