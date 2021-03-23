<?php
    require( "../../functions.php" );

    $update = updateProgress($_POST);
    header( "Location: ../index.php" );
?>