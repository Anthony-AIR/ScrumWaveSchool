<?php
    require( "../../functions.php" );

    createTask( $_POST, $_POST["ProjectId"] );
    header( "Location: ../index.php" );
?>