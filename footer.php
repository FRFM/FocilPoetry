<footer class="PageFooter text-center text-monospace">

<?php 

$data = file_get_contents("JSON/Versos.json");
$Frase = json_decode($data, true);

$i = rand(0,count($Frase)-1);


	echo '<p id = "Quote">"'.$Frase[$i]["Verso"].'"</p>';
	echo '<p id ="Author">-'.$Frase[$i]["Autor"].'</p>'

?>
		<p id = "Copyright">&#169; Todos Los Derechos Reservados</p>
</footer>		
</body>
</html>