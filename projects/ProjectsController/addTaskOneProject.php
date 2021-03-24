<?php
    require( "../../functions.php" );
    $id = $_GET["id"];
    createTask( $_POST, $id );
    header( "Location: ../../home/project2.php?id= $id" );
?>