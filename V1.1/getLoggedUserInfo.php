<?php 
session_start();
require_once("const.php");
require_once("functions.php");
$isLogin = isAnyUserLoggedIn();

    // if(!isAnyUserLoggedIn()){
    //     // header("Location: login.php");
    //     // die("need to login");
    //     redirectToLogin();
    // }

$userName = getLoggedUsernamefromSession();

$Connection = getConnection(DB);
$columns = TABLE_USER_COLUMNS;
$table = TABLE_USER;
$query = "Select $columns from $table Where username = '{$userName}' Limit 1";
// echo $query;
$results = getDbRowsAsArray($Connection, $query);

$rsJson = json_encode($results);
// print_r($rsJson);

echo $rsJson;

?>

