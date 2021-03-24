<?php
    require( "../../functions.php" );

    doneProject( $_GET["id"] );
    header( "Location: ../index.php" );
?>