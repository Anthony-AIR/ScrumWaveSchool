<?php
    require( "../../functions.php" );

    updateAllFromProject( $_POST, $_POST["ProjectId"] );
    header( "Location: ../index.php" );
?>