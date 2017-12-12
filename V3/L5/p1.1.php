<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L5 : Intro PHP</title>

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
        $sp1 = explode(" ",  $input );

        printArr("Original Order",$sp1 );

        $reverseOrder = reverse($sp1);

        printArr("Reverse Order",$reverseOrder );

    } else {
        echo "<h1>no Data</h1>";
    }

}

function reverse($arr){
    $newArr = array();  
    $len = count($arr) - 1;
    $i2 = 0;
    for ($i= $len; $i >= 0 ; $i--) { 
        $item = $arr[$i];
        $newArr[$i2++] =  $item;
    }

    return $newArr;
}

function printArr($name, $arr){
    $len = count($arr);
    echo "<h1> Printing : $name </h1>";
    for ($i= 0; $i < $len ; $i++) { 
        $item = $arr[$i];
        echo "<h4> item : $item </h4>";
    }

}
?>


<body>
    <div class="page">
    <form action="p1.php" method="post">
        <label>Input : </label>     <br />
        <input type="text" name="input" placeholder="input"/> <br />
        <label>output : </label>      
        <textarea type="text" name="output" placeholder="output"></textarea>
       
        <input type="submit" value="Save"/>
    </form>

    </div>


    <script type="text/javascript" src="script.js"></script>
</body>

</html>