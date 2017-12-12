<?php
    require('db.php');
    
    function codeUpdate($html,$css,$js,$codename,$id){
        
        global $conn;

        $realhtml = htmlspecialchars($html,ENT_QUOTES);
        $realcss = htmlspecialchars($css,ENT_QUOTES);
        $realjs = htmlspecialchars($js,ENT_QUOTES);
        
        $sql = "UPDATE codefile SET CodeFileName ='$codename' , HTMLCode ='$realhtml', 
                CSSCode ='$realcss', JavascriptCode ='$realjs' where CodeID ='$id'";
        
        if ($conn->query($sql) === TRUE) 
        {
            return true;
        }
        else 
        {
            return false;
        }
    }

    function linkgenerator($storeID,$userID,$date,$Time){
        $sql = "INSERT INTO codefile (CodeID) VALUES ('$storeID')";
        $sql2 = "INSERT INTO code (CodeID,UserID,CreatedDate,CreatedTime) VALUES ('$storeID','$userID','$date','$Time')";
       
        
        global $conn;
        
        if (mysqli_query($conn,$sql) === TRUE) {
            if (mysqli_query($conn,$sql2) === TRUE) {
                return true;
            }
        }
        else 
        {
            return false;
        }
    }


    function deleteCode($del){
        
        global $conn;
        $sql = "DELETE FROM codefile WHERE CodeID='".$del."'";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: ../view/display_List_Code.php");
        } else {
            echo 'alert("Error")';
        }
        
        $conn->close();
    }

    function getCodeList(){
        session_start();
        
        $UserID = $_SESSION["UserID"];
        global $conn;
       // $sql = "SELECT DISTINCT (CodeID) CodeID ,CodeFileName FROM codefile";
       $sql = "SELECT DISTINCT (codefile.CodeID) CodeID ,codefile.CodeFileName,code.CodeID,code.UserID FROM codefile,code where code.UserID='".$UserID."' and code.CodeID = codefile.CodeID"; 
       return $result = $conn->query($sql);
    }

    function getCodeListForIndex(){
      
        if(isset($_SESSION["UserID"]) === true){
            $UserID = $_SESSION["UserID"];
            global $conn;
            // $sql = "SELECT DISTINCT (CodeID) CodeID ,CodeFileName FROM codefile";
            $sql = "SELECT DISTINCT (codefile.CodeID) CodeID ,codefile.CodeFileName,code.CodeID,code.UserID FROM codefile,code where code.UserID='".$UserID."' and code.CodeID = codefile.CodeID"; 
            return $result = $conn->query($sql);
        }
    }

  
?>