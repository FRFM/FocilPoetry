<?php include 'header.php';?>

<?php 


$data = file_get_contents("JSON/Dev.json");
$DevNotes = json_decode($data, true);

$PrimaryBg = true;
$Bg = "Primary";
$BgAlt = "Secondary";


echo '<div class="container-fluid Main-Container" >';

    foreach($DevNotes as $Dev){
        if($PrimaryBg){
            $Bg = "Primary";
            $BgAlt = "Secondary";
            $PrimaryBg = false;
        }else{
            $Bg = "Secondary";
            $BgAlt = "Primary";
            $PrimaryBg = true;
            
        }
        echo '<div class="DevSectionBackground'.$Bg.'-Background">';
			echo '<div class="container-fluid">';
				echo '<div class="DevSection row flex flex-row">';
						echo '<div class="col text-center '.$BgAlt.'-Section">';
							echo '<div class="DevSection-Title">'.$Dev["Version"].'</div>';
                            echo '<div class="DevSection-Date">'.$Dev["Dia"].' de '.$Dev["Mes"].' del '.$Dev["Anio"].'</div>';
                            foreach($Dev["Contenido"] as $Cont){
                                 echo '<div class="DevSection-SubTitle">'.$Cont["Titulo"].'</div>';
                                foreach($Cont["Cambio"] as $Cambio){
                                    echo ' <div class = "DevSection-Content">'.$Cambio.'</div>';
                                }
                            }  
    
?>
             
                       
						</div>
					</div>
				</div>
		</div>
<?php 

    }
    
    ?>

<?php 

echo '</div>';
?>
<?php include 'footer.php';?>