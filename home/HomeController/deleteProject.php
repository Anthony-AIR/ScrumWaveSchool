<?php
    require( "../../functions.php" );

    deleteProject( $_GET["id"] );
    header( "Location: ../index.php" );
?>