<?php
    require( "../../functions.php" );

    addUser($_POST, $_POST["color"]);
    header( "Location: ../index.php" );
?>