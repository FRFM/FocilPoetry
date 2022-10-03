<?php 
include "conex.php";

date_default_timezone_set("America/Mexico_City");
    $sqlConsultarPoemas = $con->query("SELECT * FROM Contador");

		while ($row = $sqlConsultarPoemas->fetch_array()) {
	    $id = $row['Id'];
	    $nombre = $row['Nombre'];
	    $visitas = $row['Visitas'];
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>Id: </b> <?php echo $id ?><br>
        		    <b>Visitas: </b> <?php echo $visitas ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	
?>