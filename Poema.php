<?php include 'header.php';?>
<?php
function mostrarPoema($poema) {
    $data = file_get_contents("JSON/Poemas.json");
    $Poemas = json_decode($data, true);
    $i = 0;
    if($poema == "RANDOM"){
        $j = rand(0,count($Poemas)-1);
        $poema = $Poemas[$j]["Info"]["Titulo"];
    }
    
    foreach ($Poemas as $Poema) {
        
        if($Poema["Info"]["Titulo"] == $poema){

            echo '<div class="Titulo">'.$poema.'</div>';
            foreach($Poema["Poema"] as $Estrofa){
                echo '<div class="Estrofa">';
                foreach($Estrofa as $Verso){
                    echo '<div class="Verso">'.$Verso.'</div>';
                }
                echo '</div>';
            }
           

            echo '<div>';
            echo '<div class="Button-Nav align-content-center">';
            $indexSup = $i+1;
            $indexInf = $i-1;
            if($indexSup >= count($Poemas)){
                $indexSup = 0;
            }else if($indexInf < 0){
                $indexInf = count($Poemas)-1;
            }
            echo '<a href='."'Poema.php?poema=".$Poemas[$indexInf]["Info"]["Titulo"]."'".'type="button" class="Nav-Button"><i class="fas fa-chevron-circle-left fa-2x"></i></a>';
            echo '<a href="Poemas.php" type="button" class="Nav-Button"><i class="fas fa-home fa-2x"></i></a>';
            echo '<a href='."'Poema.php?poema=".$Poemas[$indexSup]["Info"]["Titulo"]."'".'type="button" class="Nav-Button"><i class="fas fa-chevron-circle-right fa-2x"></i></a>';
            echo '</div>';
            echo '</div>';
            break;
        } 
        $i = $i + 1;   
        
    }
   

}

echo '<div class="container-fluid Main-Container text-center">';

if (isset($_GET['spr'])) {
    mostrarPoema("RANDOM");
}

if (isset($_GET['poema'])) {
    
    mostrarPoema($_GET['poema']);
}



echo '</div>';


?>




<?php include 'footer.php';
    include "conex.php";
    date_default_timezone_set("America/Mexico_City");

    $ip = $_SERVER['REMOTE_ADDR'];

    $sqlConsultar = $con->query("SELECT * FROM Contador WHERE Id = '$id' AND Poema = '$poema' ORDER BY id desc");
    $contarConsultar = $sqlConsultar->num_rows;

    if($contarConsultar == 0){
        $sqlInsertar = $con->query("INSERT INTO `Contador`(`Ip`, `Fecha`, `Poema`) VALUES ('$ip',now(),'$poema');");
    }else{
        $row = $sqlConsultar->fetch_array();
        $fechaRegistro  = $row['Fecha'];
        $fechaActual = date("Y-m-d H:i:s");
        $nuevaFecha = strtoTime($fechaRegistro.+"3 hour");
        $nuevaFecha = date("Y-m-d H:i:s",$nuevaFecha);

        if($fechaActual >= $nuevaFecha){
            $sqlInsertar = $con->query("INSERT INTO `Contador`(`Ip`, `Fecha`, `Poema`) VALUES ('$ip',now(),'$poema');");
        }
    }
    $sqlActualizar = $con->query("UPDATE Poemas SET Visitas = Visitas + 1 WHERE Nombre = $poema");
?>

