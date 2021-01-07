<?php

require_once 'Endereco.class.php';
require_once 'Telefone.class.php';

class Contato {
    private $nome;
    private $sobrenome;
    private $endereco;
    private $telefones;
    
    function __construct($nome, $sobrenome) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->endereco = null;
        $this->telefones = [];
    }

    
    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getTelefones() {
        return $this->telefones;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setEndereco($cep, $rua, $numero, $bairro, $cidade, $estado, $pais) {
        $this->endereco = new Endereco($cep, $rua, $numero, $bairro, $cidade, $estado, $pais);
    }

    function adicionarTelefone($codArea, $numTel) {
        $telefone = new Telefone($codArea, $numTel);
        
        foreach ($this->telefones as $telLista) {
            if ($telLista->getCodArea() == $telefone->getCodArea() && $telLista->getNumTel() == $telefone->getNumTel()){
                return;
            }
        }
        $this->telefones[] = $telefone;
    }
    
    function removerTelefoneInd($ind){
        if (isset($this->telefones[$ind])){
            unset($this->telefones[$ind]);
        }
    }
    
    function removerTelefone($codArea, $numTel){
        $indRemove =-1;
        foreach ($this->telefones as $ind => $telLista) {
            if ($telLista->getCodArea() == $codArea && $telLista->getNumTel() == $numTel){
                $indRemove = $ind;
            }
        }
        if ($indRemove != -1){
            $this->removerTelefoneInd($indRemove);
        }
    }
    function limparTelefones(){
        $this->telefones = [];
    }
    
    function __toString() {
        $texto = "<hr>";
        $texto = $texto. "$this->nome $this->sobrenome <br>";
        if (isset($this->endereco)){
            $texto = $texto.$this->endereco . "<br>";
        }
        
        $texto = $texto."Telefones: <br>";
        foreach ($this->telefones as $telLista) {
            $texto = $texto.$telLista."<br>";
        }
        return $texto;
    }
}