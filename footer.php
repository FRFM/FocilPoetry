<footer class="PageFooter text-center text-monospace">

<?php 

class Quotes{
	function __construct(){
	}

	function getVerso($Frase,$index){
		$a = $Frase[$index]["Verso"];
		return $a;
	}

	function getAutor($Frase,$index){
		return $Frase[$index]["Autor"];
	}

}

$data = file_get_contents("JSON/Versos.json");
$Frase = json_decode($data, true);

$i = rand(0,count($Frase)-1);

$Q = new Quotes($Frase);


	echo '<p id = "Quote">"'.$Q->getVerso($Frase,$i).'"</p>';
	echo '<p id ="Author">-'.$Q->getAutor($Frase,$i).'</p>'

?>
		<p id = "Copyright">&#169; Todos Los Derechos Reservados</p>
</footer>		
</body>
</html>