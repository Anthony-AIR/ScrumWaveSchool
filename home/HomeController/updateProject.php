<?php
    require( "../../functions.php" );

    updateAllFromProject( $_POST, $_GET["id"] );
    header( "Location: ../index.php" );
?>