<?php
require( "../functions.php" );
$projects = getAllProjects();

include( "../templates/header.php" );

?>

<style>
    div{
        margin-top:150px;
    }
</style>

<div class="alert alert-dark text-center" role="alert">
    <strong></strong>&nbsp; &nbsp;Weet je zeker dat je klaar bent met dit project?
</div>
<form class="text-center" action="HomeController/DoneProject.php">
<input type="text" name="id" value="<?php echo $_GET["id"] ?>" hidden>
<button class="btn btn-danger" type="submit">Bevestigen</button>
<a class="btn btn-info" href="<?php echo URL ?>home/index">Annuleren</a>
</form>