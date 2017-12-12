<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L5 : Validate Password</title>

    <link rel="stylesheet" href="normalize.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<?php 

if ($_POST != null) {

    $pass = $_POST["Password"];
    $confirmPassword = $_POST["ConfirmPassword"];
    $res = validatePassword($pass, $confirmPassword);

    printPasswordValidation($res);

}


function validatePassword($password, $confirmPassword){
    $results = array();
    $returnResults = array();
    // $pattern = "(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\~\!\@\#\$\%\^\&\*\(\)\-\_\=\]\[\}]).+";
    $pattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).+$";
    $isMatch = preg_match_all ("/{$pattern}/", $password, $results);

    // print_r($results);
    // print_r($isMatch);

    if($isMatch === 0 ){
        // not valid
        $returnResults[] = "Your given password is NOT valid, it should contain at least one uppercase and lowercase chacter and at least a number digit.";

    }

    if($password !== $confirmPassword){
        $returnResults[] = "Your given password is NOT valid, your password and confirm password should match.";
    }

    $len = strlen($password);
    $validLen = $len >= 8 && $len <= 32;

    if( $validLen == false ){
        $returnResults[] = "Your given password is NOT valid, it should be in between 8 and 32 length.";
    }

   return $returnResults;
}

function printPasswordValidation($arr){
    if(count($arr) > 0){
        echo "<h1 class='error-header'>Please fix these errors for the password:</h1>";
        echo "<ul class='error'>";
        foreach ($arr as $error) {
            echo "<li> {$error}</li>";
        }
        echo "</ul>";
    } else {
        echo "<h1 class='success'>Your given password is valid. </h1>";
    }
}

?>


<body>
    <div class="page">
    <form action="p4.php" method="post">
        <label>Password : </label>     <br />
        <input type="text" name="Password" placeholder="Password" style="display:block; width:500px;height:25px;" width="500px"/> <br />
        <label>Confirm Password : </label>     <br />
        <input type="text" name="ConfirmPassword" placeholder="ConfirmPassword" style="display:block; width:500px;height:25px;" width="500px"/> <br />
       
        <input type="submit" value="Save"/>
    </form>

    </div>


    <script type="text/javascript" src="script.js"></script>
</body>

</html>