<?php
class Telefone {
    private $codArea;
    private $numTel;
        
        function __construct($codArea, $numTel) {
            $this->codArea = $codArea;
            $this->numTel = $numTel;
        }

        function getCodArea() {
            return $this->codArea;
        }

        function getNumTel() {
            return $this->numTel;
        }

        function setCodArea($codArea) {
            $this->codArea = $codArea;
        }

        function setNumTel($numTel) {
            $this->numTel = $numTel;
        }

        function __toString() {
            return "($this->codArea) $this->numTel" ;
        }
}
        