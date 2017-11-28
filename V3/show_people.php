<?php 
    //Global $Connection;
    require_once("const.php");
    require_once("functions.php");
    $Connection = getConnection(DB);
    $results = getDbRowsAsArray($Connection, "Select * from " . TABLE_PERSON);
    //echo "</br><pre>" ;print_r( $results ) ;echo "</pre></br>" ; die(); 
    $count_rows = count($results);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Displaying Person</title>
    <link  type="text/css" rel="stylesheet" href="styles.css" />
</head>
<body>
<table class="show-people-table">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
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
