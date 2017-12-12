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
        $sp1 = explode(",",  $input );
        // print_r($sp1);
        $feq = frequencyOfArray($sp1);

        printArr("Frequency:", $feq );

    } else {
        echo "<h1>no Data</h1>";
    }

}

function frequencyOfItem($arr, $item){
    $newArr = array();  
    $len = count($arr) - 1;
    $count = 0;


    for ($i= $len; $i >= 0 ; $i--) { 
        $item2 = $arr[$i];
        if($item2 === $item){
            $count++;
        }
        
    }

    return $count;
}


function frequencyOfArray($arr){
    $newArr = array();  
    $len = count($arr) - 1;
    $i2 = 0;
    for ($i= $len; $i >= 0 ; $i--) { 
        $item = $arr[$i];
        if(!array_key_exists($item,$newArr)){
            $newArr[$item] = frequencyOfItem($arr, $item);
        }
    }

    return $newArr;
}

function printArr($name, $arr){
    $len = count($arr);
    echo "<h1> Printing : $name </h1>";

    foreach ($arr as $key => $value) {
        # code...        
        echo "<h4> $key occured $value times. </h4>";
    }    
}
?>


<body>
    <div class="page">
    <form action="p2.php" method="post">
        <label>Input : </label>     <br />
        <input type="text" name="input" placeholder="input" style="display:block; width:500px;height:500px;" width="500px"/> <br />
       
        <input type="submit" value="Save"/>
    </form>

    </div>


    <script type="text/javascript" src="script.js"></script>
</body>

</html>