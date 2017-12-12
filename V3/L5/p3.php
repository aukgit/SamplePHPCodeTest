<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L5 : Power Raise</title>

    <link rel="stylesheet" href="normalize.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<?php 

if ($_POST != null) {
        //save into database.
        //echo "</br><pre>" ;print_r( $_POST ) ;echo "</pre></br>" ; die(); 
        //Global $Connection;
    $input = $_POST["input"];

    if ( $input != NULL) {
        $sp1 = explode(",",  $input );
        // print_r($sp1);
        $num = $sp1[0];
        $deg = $sp1[1];
        $res = powerX($num, $deg);
        echo "<h1>Power($input) : $res </h1>";

    } else {
        echo "<h1>no Data</h1>";
    }

}

function powerX($num, $deg){
       
    $result = $num;

    if($deg == 0){
        return 1;
    }

    
    if($deg == 1){
        return $num;
    }

    // echo "num : $num , deg : $deg <br>";

    for ($i= 1; $i < $deg; $i++) { 
        $result *= $num;
        
        echo "r1 : $result, num : $num , deg : $deg <br>";
    }

    return $result;
}

?>


<body>
    <div class="page">
    <form action="p3.php" method="post">
        <label>Input : </label>     <br />
        <input type="text" name="input" placeholder="input" style="display:block; width:500px;height:500px;" width="500px"/> <br />
       
        <input type="submit" value="Save"/>
    </form>

    </div>


    <script type="text/javascript" src="script.js"></script>
</body>

</html>