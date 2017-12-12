<?php 

require('../module/db_config/db.php');


    if(!empty($_POST["email"])) {
        // $result = mysql_query("SELECT count(*) FROM users WHERE userName='" . $_POST["username"] . "'");
        // $row = mysql_fetch_row($result);
        // $user_count = $row[0];
        // if($user_count>0) echo "<span class='status-not-available'> Username Not Available.</span>";
        // else echo "<span class='status-available'> Username Available.</span>";
        // }

        $sql = "SELECT email FROM user WHERE email ='" . $_POST["email"] . "'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "false";
            
        }
        else{ 
            echo "true";
            }
        
        $conn->close();
        }
?>