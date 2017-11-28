<?php session_start(); #must 
?>
<?php 
    //Global $Connection;
    require_once("const.php");
    require_once("functions.php");
    
?>

<?php 
    $fileData="No session data present";
    
    if($_POST != null){
        $_SESSION[SAMPLE_FILE] = $_POST['file'];        
    }
    
    if($_SESSION != null && $_SESSION[SAMPLE_FILE] != null){
        //save into database.
        //echo "</br><pre>" ;print_r( $_POST ) ;echo "</pre></br>" ; die();
        $fileData =   $_SESSION[SAMPLE_FILE];      
    }    
?>
<br />

<form action="sessione.php" method="post">    
    File data: <br />
    <textarea placeholder="FILE text" name="file" rows="40"><?php echo $fileData; ?></textarea> <br />
    <input type="submit" value="Save"/>
</form>