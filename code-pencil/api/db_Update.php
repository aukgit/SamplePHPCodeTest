<?php

    session_start();
    date_default_timezone_set("Asia/Dhaka");
    require('../module/db_config/sqlLogic.php');
        
       
    $codename = $_POST['codename'];
    $html = $_POST['html'];
    $css = $_POST['css'];
    $js = $_POST['js'];
    $id = $_SESSION['Req_URI_ID'];
   
    // its at module/db_config/sqlLogic.php
    codeUpdate($html,$css,$js,$codename,$id);
    
        
        

?>