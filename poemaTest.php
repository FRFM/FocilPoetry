<?php 

use PHPUnit\Framework\TestCase;

    class poemaTest extends TestCase{

        /** @test */
        function esAleatorioTestS(){
            $p = new Poema();
            $this->assertEquals(true,$p->esAleatorio("RANDOM"));
        }

        /** @test */
        function esAleatorioTestF(){
            $p = new Poema();
            $this->assertEquals(false,$p->esAleatorio("LDR"));
        }

        /** @test */
        function foundPoemaTestT(){
            $p = new Poema();
            $poemas = $p->getPoemas();
            $this->assertEquals(true,$p->foundPoema($poemas[0],"Vaivén Peligroso"));
        }

        /** @test */
        function foundPoemaTestF(){
            $p = new Poema();
            $poemas = $p->getPoemas();
            $this->assertEquals(false,$p->foundPoema($poemas[1],"Vaivén Peligroso"));
        }
    
        /** @test */
        function getSupTest1T(){
            $p = new Poema();
            $this->assertEquals(4,$p->getSup(3,57));
        }

        /** @test */
        function getSupTest2T(){
            $p = new Poema();
            $this->assertEquals(0,$p->getSup(56,57));
        }

        /** @test */
        function getInfTest1T(){
            $p = new Poema();
            $this->assertEquals(2,$p->getInf(3,57));
        }

        /** @test */
        function getInfTest2T(){
            $p = new Poema();
            $this->assertEquals(56,$p->getInf(0,57));
        }

        /** @test */
        function existsPoemaTestS(){
            $p = new Poema();
            $this->assertEquals(true,$p->existsPoema($p->getPoemas(),"Vaivén Peligroso"));
        }

        /** @test */
        function existsPoemaTestF(){
            $p = new Poema();
            $this->assertEquals(false,$p->existsPoema($p->getPoemas(),"Vaiven Peligroso"));
        }

        /** @test */
        function getTituloTestT(){
            $p = new Poema();
            $this->assertEquals("Vaivén Peligroso",$p->getTitulo(0,$p->getPoemas()));
        }

        /** @test */
        function getTituloTestF(){
            $p = new Poema();
            $this->assertEquals("Beldad Diafana",$p->getTitulo(1,$p->getPoemas()));
        }

    }
?>