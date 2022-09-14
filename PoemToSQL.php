<?php 

$data = file_get_contents("JSON/Poemas.json");
$Poemas = json_decode($data, true);
//INSERT INTO `Poemas` (`Id`, `Nombre`) VALUES (NULL, '')
foreach($Poemas as $Poema){
    echo "INSERT INTO `Poemas` (`Id`, `Nombre`) VALUES (NULL, '";
    echo $Poema["Info"]["Titulo"];
    echo "');";
    echo "<br><br>";
}   

?>