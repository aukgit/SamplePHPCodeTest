<?php

    // what i actualy write
    $Request = $_GET["req"];

    
    // Request Method
    if($Request === "logout"){
        logout();
    }
    if($Request === "signin"){
        signin();
    }
    if($Request === "signup"){
        signup();
    }
    if($Request === "editor"){
        editor();
    }
    if($Request === "codelist"){
        codelist();
    }






    // Function Calling Based on function 
    function signin(){
        header('Location: ../view/sign_In_Page.php');
    }
    function signup(){
        header('Location: ../view/sign_Up_Page.php');
    }
    function editor(){
        header('Location: ../module/link_Generator.php');
    }
    function codelist(){
        header('Location: ../view/display_List_Code.php');
    }
    function logout(){
        header('Location: ../module/logout.php');
    }


?>