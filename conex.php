<?php
 $Userver = "localhost";
    $Uuser = "id19380969_focil";
    $Upass = "#FocilPoetry2022";
    $Udb = "id19380969_focilpoetry";
 
    $con= new mysqli($Userver, $Uuser, $Upass, $Udb);
if($con){
    echo "Conex";
}else{
    echo "Error";
}

?>