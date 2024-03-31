<?php

/*$val=$_GET['usuario'];

echo $val;
*/
require_once("conex.php");

if (isset($_GET['usuario'])) {
	// Escape special characters in string for use in SQL statement	
	$name = mysqli_real_escape_string($con, $_GET['usuario']);
	
	// Check for empty fields
	if (empty($name)) {
		if (empty($name)) {
			echo'<script type="text/javascript">
        alert("Debe ingresar el nombre");
        window.location.href="index.html";
        </script>';
		}
				
		// Show link to the previous page
		
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($con, "INSERT INTO jugador (`nombre`) VALUES ('$name')");
		
		// Display success message
        echo'<script type="text/javascript">
       
        window.location.href="juego.html";
        </script>';
	}
}
?>