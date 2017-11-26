<?php require_once("const.php") ?>
<?php require_once("functions.php") ?>

<form action="index.php" method="post">
    <label>Name : </label>    
    <input type="text" name="Name" placeholder="Name"/> <br />
    <label>Location : </label> <br>
    <textarea placeholder="location" name="location"></textarea> <br />
    <input type="submit" value="Save"/>
</form>
<?php 
    if($_POST != null){
        //save into database.
        Global $Connection;
        $Connection = getConnection(DB);
        $insert_sql = insertSQL(TABLE_PERSON,$_POST);
        executeSQL($Connection, $insert_sql);
    }    
?>
<br />

<a href="show_people.php">Show People Details</a>
