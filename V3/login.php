<?php 
    session_start();
    require_once("const.php");
    require_once("functions.php");

    if(isAnyUserLoggedIn()){
        redirectTo(LOGGED_IN_PAGE);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link  type="text/css" rel="stylesheet" href="styles.css" />
</head>
<body>
<h1>Login !</h1>
<form action="login.php" method="post">
     <label>Username : </label>      
    <input type="text" name="Username" placeholder="Username"/> <br />
     <label>Password : </label>    
    <input type="password" name="password" placeholder="password"/> <br />
    <input type="submit" value="login"/>
</form>
<?php 

    if($_POST != null){
        //save into database.
        //echo "</br><pre>" ;print_r( $_POST ) ;echo "</pre></br>" ; die(); 
        //Global $Connection;
        $username = $_POST["Username"];
        $pass = $_POST["password"];
        $user = getUserByPassword($username,$pass);


        if(!is_null($user)){
            // print_r($user);
            $fullName = $user[0]["FullName"];
            //print_r($fullName);
            echo "<h1>$fullName  - user login successfully. </h1>";
            createSessionLogin($username);
            redirectTo(LOGGED_IN_PAGE);
        } else {
            echo "<h1>$username or password - is not exist. </h1>";
        }
   
    }    
?>
<br />

</table>
</body>
</html>
