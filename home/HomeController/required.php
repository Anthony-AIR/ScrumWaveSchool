<?php
    require( "../../functions.php" );

    if ( $_SERVER["REQUEST_METHOD"] == "POST" ){
    	if ( empty( $_POST["Name"] ) ) {
			$nameErr = "Een project naam is verplicht in te vullen!";
            header( "Location: ../index.php/$nameErr" );
			//render("home/index", array('projects' => getAllProjects(),"nameErr" => $nameErr ));
		}

    	else if( !empty( $_POST["Name"] ) ){
            createProject( $_POST["Name"] );
			header( "Location: ../index.php" );
		}
	}

?>