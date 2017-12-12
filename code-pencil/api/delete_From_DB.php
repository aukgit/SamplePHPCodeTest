<?php
    
    require('../module/db_config/sqlLogic.php');

    $del = $_GET['del'];
    // sql to delete a record
    
    deleteCode($del);

?>