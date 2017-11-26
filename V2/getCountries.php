<?php 
    //Global $Connection;
require_once("const.php");
require_once("functions.php");

if ($_POST != null) {
    $search = $_POST["Search"];
        // echo $search;
        // echo "coming from php";
       // die();

    $conn = getConnection(DB);
    $query = "Select * from " . TABLE_COUNTRY . " where country_name like '%" . $search . "%'";
    // echo $query;
    $records = getDbRowsAsArray($conn, $query);
    $recordsJson = json_encode(['countries' => $records]);
    print_r($recordsJson);
}
?>