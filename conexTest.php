<?php 

use PHPUnit\Framework\TestCase;

class conexTest extends TestCase{

    function testVerifyConexS(){
        $conx = new SQLConex();
        $Userver = "localhost";
        $Uuser = "id19380969_focil";
        $Upass = "#FocilPoetry2022";
        $Udb = "id19380969_focilpoetry";
        $this->assertEquals(true,$conex->verifyConex($conx->conex($Userver,$Uuser,$Upass,$Udb)));

    }

    function testVerifyConexF(){
        $conx = new SQLConex();
        $Userver = "localhost";
        $Uuser = "id19380969_focil";
        $Upass = "#FocilPoetry2021";
        $Udb = "id19380969_focilpoetry";
        $this->assertEquals(false,$conex->verifyConex($conx->conex($Userver,$Uuser,$Upass,$Udb)));

    }


}

?>