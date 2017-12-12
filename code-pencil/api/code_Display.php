<?php
   
    $getID = $_GET['id'];
    sessionCreate('Req_URI_ID',$getID);
    $sql = "SELECT DISTINCT (CodeID) CodeID,CodeFileName ,HTMLCode,CSSCode,JavascriptCode FROM codefile where CodeID = '".$getID."'";
    $result = $conn->query($sql);

?>