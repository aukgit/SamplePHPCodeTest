<?php
 include('../module/db_config/db.php');
 include('../api/code_Display.php');
?>

<html>

    <head>
        <?php include('nav/editor_Header.php'); ?>
    </head>

    <body>

        <?php include('nav/editor_Option_Slider.php'); ?>
        <?php include('nav/header_Nav.php'); ?>

     

        <div id="bodyContainer">

            <!-- Get code From DB -->
            <?php include('component/get_Code_From_DB.php'); ?>
            
          

            <!-- After Getting the code display the code -->
            <?php include('nav/Get_editor.php'); ?>

        </div>

        <!-- <div id="getmessage"></div> -->
        <script language="JavaScript" type="text/javascript" src="../dist/js/editorjs/jquery.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="../dist/js/editorjs/script.js"></script>
        <script language="JavaScript" type="text/javascript" src="../dist/js/editorjs/jquery.mCustomScrollbar.concat.min.js"></script>

    </body>

</html>