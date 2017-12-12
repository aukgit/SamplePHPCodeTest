<?php
    // For routing config
	include('../api/link_Parsing.php');
?>

    <html>

    <head>
        <?php include('nav/editor_Header.php'); ?>
    </head>

    <body>
        <?php include('nav/editor_Option_Slider.php'); ?>

        





        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand ml-3" href="../index.php">code-pencil</a>
             
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <form class="form-inline mt-3 mr-2">
                        <ul class="navbar-nav">
                            <button type="button" id="sidebarCollapse" class="btn btn-outline-secondary">Option</button>
                            <li class="nav-item">
                                &nbsp;
                            </li>
                            <?php include('component/session_Check.php')?>

                        </ul>

                    </form>
                </div>
            </nav>
        </header>

        
        <?php include('component/get_Code_From_DB.php'); ?>
        <?php include('nav/Get_editor_For_Editor.php'); ?>




        <br>
    
        <script language="JavaScript" type="text/javascript" src="../dist/js/editorjs/jquery.min.js"></script>
        <script language="JavaScript" type="text/javascript" src="../dist/js/editorjs/script.js"></script>
        <script language="JavaScript" type="text/javascript" src="../dist/js/editorjs/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="../dist/js/editorjs/jQuery-ZenCoding.js"></script>
 

    </body>

</html>