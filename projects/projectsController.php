<?php
require( "../functions.php" );

if ( $_POST["delete"] ){
	deleteUser( $_POST["color"] );
}

else if ( $_POST["edit"] ){
    addUser( $_POST["color"] );
}

else if ( $_post["updateProjects"] ){
    updateProject( $_POST, $_POST["ProjectId"] );
}

else if ( $_POST["AddTask"] ){
    createTask( $_POST, $_POST["ProjectId"] );
}

else if ( $_POST["save"] ){
    updateProgress( $_POST );
}

//header( "Location: index.php" );
?>