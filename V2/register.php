<?php require_once("const.php") ?>
<?php require_once("functions.php") ?>
<h1>Register account !</h1>
<form action="register.php" method="post">
    <label>Full Name : </label>    
    <input type="text" name="FullName" placeholder="FullName"/> <br />
    <label>Username : </label>      
    <input type="text" name="Username" placeholder="Username"/> <br />
     <label>Password : </label>    
    <input type="password" name="password" placeholder="password"/> <br />
    <input type="submit" value="Save"/>
</form>
<?php 

    if($_POST != null){
        //save into database.
        //echo "</br><pre>" ;print_r( $_POST ) ;echo "</pre></br>" ; die(); 
        //Global $Connection;
        $user = $_POST["Username"];

        if(!existUser($user)){
            $Connection = getConnection(DB);
            $insert_sql = insertSQL(TABLE_USER, $_POST);
            executeSQL($Connection, $insert_sql);
            echo "<h1>$user  - user created successfully. </h1>";
        } else {
            echo "<h1>$user  - sorry user already present. </h1>";
        }
   
    }    
?>
<br />

<a href="login.php">Try login</a>
<a href="show_users.php">users</a>
