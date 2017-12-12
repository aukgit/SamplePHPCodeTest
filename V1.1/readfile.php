<?php 
    //Global $Connection;
    require_once("const.php");
    require_once("functions.php");

?>

<?php 
    if($_POST != null){
        //save into database.
        //echo "</br><pre>" ;print_r( $_POST ) ;echo "</pre></br>" ; die();
        writeToFile(SAMPLE_FILE,$_POST['file']);        
    }    
?>
<br />

<?php
    $file = readfromFile(SAMPLE_FILE);
    //echo "</br><pre>" ;print_r( $results ) ;echo "</pre></br>" ; die(); 
    $count_rows = count($file);
?>

<form action="readfile.php" method="post">    
    File data: <br />
    <textarea placeholder="FILE text" name="file" rows="40"><?php echo $file; ?></textarea> <br />
    <input type="submit" value="Save"/>
</form>