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

    <h2>Internal Page for registed users!</h>
    <h3>Currently loggin with 
    <?php 
        echo $userName;
    ?> 
    </h3>
<table class="show-people-table">
    <thead>
        <th>ID</th>
        <th>FullName</th>
        <th>Username</th>
        <th>Password</th>
    </thead>
    <tbody>
        <?php 
            if($count_rows > 0) {
                foreach ($results as $row) {
                    echo "<tr>";
                    foreach ($row as $col => $val) {
                        if(!is_numeric($col)){
                            echo "<td>" . $val .  "</td>";
                        }                        
                    }
                    echo "</tr>";
                }
            }
        ?>
       
    </tbody>
    <a href="logout.php">Logout</a>
</table>
</body>
</html>
