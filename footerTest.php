<?php 
use PHPUnit\Framework\TestCase;

    class footerTest extends TestCase{

        /** @test */
        function getVersoTestS(){
            $q = new Quotes();
            $this->assertEquals("¿Qué es poesía? ¿Y tú me lo preguntas? Poesía... eres tú",$q->getVerso($q->getFrases(),4));
        }

        /** @test */
        function getVersoTestF(){
            $q = new Quotes();
            $this->assertEquals("¿Qué es poesía? ¿Y tú me lo preguntas? Poesía... eres tú",$q->getVerso($q->getFrases(),3));
        }

        /** @test */
        function getAutorS(){
            $q = new Quotes();
            $this->assertEquals("Pablo Neruda",$q->getAutor($q->getFrases(),1));
        }

        /** @test */
        function getAutorF(){
            $q = new Quotes();
            $this->assertEquals("Pablo Neruda",$q->getAutor($q->getFrases(),0));
        }
    }
?>