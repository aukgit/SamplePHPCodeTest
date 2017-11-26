<?php 
    //Global $Connection;
    require_once("const.php");
    require_once("functions.php");
    $Connection = getConnection(DB);
    $results = getDbRowsAsArray($Connection, "Select * from " . TABLE_USER);
    //echo "</br><pre>" ;print_r( $results ) ;echo "</pre></br>" ; die(); 
    $count_rows = count($results);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Displaying Users</title>
    <link  type="text/css" rel="stylesheet" href="styles.css" />
</head>
<body>

    <h1>Displaying users!</h1>
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
    
</table>
</body>
</html>
