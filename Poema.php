    <?php class Poema{


        function esAleatorio($poema){
            if($poema == "RANDOM"){
                return true;
            }
            return false;
        }

        function getPoemas(){
            $data = file_get_contents("JSON/Poemas.json");
            return json_decode($data, true);
        }

        function foundPoema($Poema,$objetivo){
            if($Poema["Info"]["Titulo"] == $objetivo){
                return true;
            }else{
                return false;
            }
        }

    
        function getSup($index,$len){
            if($index == $len -1){
                return 0;
            }
            return $index + 1;
        }

        function existsPoema($Poemas,$objetivo){
            foreach($Poemas as $Poema){
                if($this->foundPoema($Poema,$objetivo)){
                    return true;
                }
            }

            return false;
        }
        function getInf($index,$len){
            if($index == 0){
                return $len-1;
            }
            return $index - 1;
        }

        function getTitulo($index,$Poemas){
            return $Poemas[$index]["Info"]["Titulo"];
        }

        function contarPoema($poema,$i){
            include "conex.php";
            date_default_timezone_set("America/Mexico_City");
        
            $ip = $_SERVER['REMOTE_ADDR'];
            $sqlConsultar = $con->query("SELECT * FROM Contador WHERE Id = '$i' AND Poema = '$poema' ORDER BY id desc");
            
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
            $sqlActualizar = $con->query("UPDATE Poemas SET Visitas = Visitas + 1 WHERE Id = $i");
        }

        function show(){
            echo '<div class="container-fluid Main-Container text-center">';
            if (isset($_GET['spr'])) {
                $this->mostrarPoema("RANDOM");
            }else if (isset($_GET['poema'])) {
                $this->mostrarPoema($_GET['poema']);
            }
            echo '</div>';
        }

        function canShow(){
            if(isset($_GET['poema'])){
                return true;
            }else{
                return false;
            }
        }

        function mostrarPoema($poema) {
            $Poemas = $this->getPoemas();
            $i = 0;
            if($this->esAleatorio($poema)){
                $j = rand(0,count($Poemas)-1);
                $poema = $this->getTitulo($j,$Poemas);
            }
            
            foreach ($Poemas as $Poema) {
                
                if($this->foundPoema($Poema,$poema)){
        
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
                    $indexSup = $this->getSup($i, count($Poemas));
                    $indexInf = $this->getInf($i, count($Poemas));
        
                    echo '<a href='."'Poema.php?poema=".$this->getTitulo($indexInf,$Poemas)."'".'type="button" class="Nav-Button"><i class="fas fa-chevron-circle-left fa-2x"></i></a>';
                    echo '<a href="Poemas.php" type="button" class="Nav-Button"><i class="fas fa-home fa-2x"></i></a>';
                    echo '<a href='."'Poema.php?poema=".$this->getTitulo($indexSup,$Poemas)."'".'type="button" class="Nav-Button"><i class="fas fa-chevron-circle-right fa-2x"></i></a>';
                    echo '</div>';
                    echo '</div>';
                    break;
                } 
                $i = $i + 1;      
            }
            $this->contarPoema($poema,$i);
        }
    }
    ?>

    <?php 

        $P = new Poema();

        if($P->canShow()){
        
               if($P->existsPoema($P->getPoemas(),$_GET['poema'])){
                include 'header.php';
                $P->show();
                include 'footer.php';
               }
            
        }
    ?>