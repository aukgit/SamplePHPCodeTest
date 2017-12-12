<?php
session_start();

require_once ("const.php");

function getConnection($db)
{
    return mysqli_connect('localhost','root', '', $db);
}

function getResultsArray($conn, $sqlQueryString){
    $results = mysqli_query($conn, $sqlQueryString);

    $rows = array();

    while($row = mysqli_fetch_array($results)){
        $rows[] = $row;
    }

    mysqli_close($conn);
    return $rows;
}


function getResultsArrayByDb($dbName, $sqlQueryString){
    $conn = getConnection($dbName);
    $results = mysqli_query($conn, $sqlQueryString);

    $rows = array();

    while($row = mysqli_fetch_array($results)){
        $rows[] = $row;
    }

    mysqli_close($conn);
    return $rows;
}

function createNews($header,$body, $priority){
    $sql = "INSERT INTO `newsdata` (`ID`, `headline`, `body`, `priority`) ";
    $sql .= " VALUES (NULL, '{$header}', '{$body}', '{$priority}');";

    // echo $sql;
    $conn = getConnection(DB);
    $results = mysqli_query($conn, $sql);

    return true;
}


function getBreakingNews(){
    $sql = "select * from newsdata where newsdata.priority >=1 AND newsdata.priority <=3";
    
    // echo $sql;

    $results = getResultsArrayByDb(DB, $sql);

    return $results;
}

function getGeneralNews(){
    $sql = "select * from newsdata where newsdata.priority > 3";
    
    // echo $sql;

    $results = getResultsArrayByDb(DB, $sql);

    return $results;
}

function getUser($username, $password){
    $sql = "select * from reporter where username='$username' AND password='$password'";

    // echo $sql;

    $results = getResultsArrayByDb(DB, $sql);

    return $results;
}


function createSession($user){
    if(count($user) > 0){
        $user = $user[0];
        printAnything($user);
        $username = $user['username'];

        $login = array('username'=> $username, 'isLogin' => true  );        

        $_SESSION[SESSION_LOGIN] = $login;
    }
}

function logOutSession(){
    $_SESSION[SESSION_LOGIN] = null;
    unset($_SESSION[SESSION_LOGIN]);
}

function isLoggedIn(){
    if( $_SESSION != null){
        $s = $_SESSION[SESSION_LOGIN];
    } else {
        return false;
    }
    

    if(isset($s) &&  $s != null &&  count($s) >1 ){
        return $s['isLogin'];
    }

    return false;
}

function redirectToLogin(){
    header("location: login.php");
}

function redirectToPage($page){
    header("location: {$page}.php");
}

function printAnything($r){
    echo "<pre>";
    print_r($r);
    echo "</pre>";
    echo "<br />";
}

function createLoginOrLogoutButton(){
    if(isLoggedIn()){
        $userName = $_SESSION[SESSION_LOGIN]['username'];
        echo "<a href='logout.php' class='logout btn btn-logout'>${userName} | logout</a>";
    } else {
        echo "<a href='login.php' class='login btn btn-login'>guest | login</a>";
    }
}


?>
