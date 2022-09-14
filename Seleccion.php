<?php include 'header.php';?>



<?php 
    function mostrarOpcion($Poema){
        echo '<div class ="Poetry-Card col-6 col-sm-4 col-md-4 col-lg-5 col-xl-5">';
                echo '<h1>'.$Poema["Info"]["Titulo"].'</h1>';
                echo '<a href='."'Poema.php?poema=".$Poema["Info"]["Titulo"]."'".' type="button" class="Poetry-Button Small Read" ><i class="fas fa-book-reader"></i></a>';
                echo '<button class="Poetry-Button Small Information" data-toggle="modal" data-target="#'.str_replace(" ","", $Poema["Info"]["Titulo"]).'-Info">';
                echo '<i class="fas fa-info flex-row-reverse"></i> </button>';
            echo '</div>';
    
            echo '<div class="modal fade" id="'.str_replace(" ","", $Poema["Info"]["Titulo"]).'-Info">';
                echo '<div class="modal-dialog">';
                echo '<div class="modal-content">';
                echo '<div class="modal-header">';
                echo '<h4 class="modal-title">'.$Poema["Info"]["Titulo"].'</h4>';
            echo '</div>';
    
            echo '<div class="modal-body">';
                echo '<p>Autor: Felipe Focil</p>';
                echo '<p>Fecha:  '.$Poema["Info"]["Dia"].' de '.$Poema["Info"]["Mes"].' del '.$Poema["Info"]["Anio"].'</p>';
                echo '<p>Idioma: '.$Poema["Info"]["Idioma"].'</p>';
            echo '</div>';
        echo '<div class="modal-footer">';
            echo '<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

?>
<?php 
function mostrarPoemas($opcion) {
    $data = file_get_contents("JSON/Poemas.json");
    $Poemas = json_decode($data, true);
    
    
        
        echo '<div class="container-fluid Main-Container"><div class="row">';

        foreach ($Poemas as $P) {
            if($opcion == "ldr" && $P["Info"]["LdR"] == "true"){
                mostrarOpcion($P);
            }else if($opcion == "fav" &&  $P["Info"]["Fav"] == "true"){
                mostrarOpcion($P);
            }
        }	
        echo '</div>';
        echo '</div>';

}
?>

<?php 
if (isset($_GET['opt'])) {
    mostrarPoemas($_GET['opt']);
}
include ("footer.php");		
			
?>