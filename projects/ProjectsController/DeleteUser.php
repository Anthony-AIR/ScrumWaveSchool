<?php
    require( "../../functions.php" );

    deleteUser( $_POST["color"] );
    header( "Location: ../index.php" );
?>