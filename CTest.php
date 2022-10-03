<?php 

 use PHPUnit\Framework\TestCase;

 class CTest extends TestCase{

    public function testSuma(){
        $calc =  new Calculadora();
        $this -> assertEquals(7,$calc->suma(3,4));
    }

 }



?>