<?php require_once("const.php") ?>
<?php require_once("functions.php") ?>

<form action="index.php" method="post">
    <input type="text" name="Firstname" placeholder="First Name"/> <br />
    <input type="text" name="LastName" placeholder="Last Name"/> <br />
    <input type="date" name="DateOfBirth" placeholder="Date of Birth"/> <br />
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
