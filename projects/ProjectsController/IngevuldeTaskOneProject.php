<?php
    require( "../../functions.php" );
    $id = $_GET["id"];
    createTaskInfo( $_POST, $_POST["taskId"] );
    header( "Location: ../../home/project2.php?id= $id" );
?>