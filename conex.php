<?php

        $Userver = "localhost";
        $Uuser = "id19380969_focil";
        $Upass = "#FocilPoetry2022";
        $Udb = "id19380969_focilpoetry";
        
    class SQLConex{

        public function __construct(){
        }
        
        public function verifyConex($con){
            if($con->connect_error){
                return false;
            }
            return true;
        }
        
        public function conex($a,$b,$c,$d){
            $con = new mysqli($a,$b,$c,$d);
            return $con;
        }
    }

    $conx = new SQLConex();
    $con = $conx->conex($Userver,$Uuser,$Upass,$Udb);
?>