<?php 

session_start();
require_once("const.php");
require_once("functions.php");

if (!isAnyUserLoggedIn()) {
    redirectTo(PAGE_LOGIN);
}

// print_r($_POST);

$name = $_POST["FullName"];
$des = $_POST["Description"];
$user = $_POST["UserName"];

$query = "UPDATE `users` SET `FullName` = '$name', `Description` = '$des' WHERE username = '{$user}'";

$conn = getConnection(DB);
executeSQL($conn, $query);

$result = json_encode(array('Status' => '200', 'Message' => "Successful update."));

echo $result;


//die();

?>
