<?php
require_once 'Contato.class.php';
class Agenda {
    private $contatos;
    
    static function salvarAgenda($agenda){
        $agendaSerializada = serialize($agenda);
        file_put_contents('agenda.save', $agendaSerializada);
        
    }
    
    static function carregarAgenda(){
        if(file_exists('agenda.save')){
            $agendaSerializada = file_get_contents('agenda.save');
            $agenda = unserialize($agendaSerializada);
            return $agenda;
        } else {
            $agenda = new Agenda();
            Agenda::salvarAgenda($agenda);
            return $agenda;
        }
    }
    
    function __construct() {
        $this->contatos = [];
    }
    
    function getContatos() {
        return $this->contatos;
    }
    
    function adicionarContato($contato){
        if (!$this->buscarContatoNome($contato->getNome())){
            $this->contatos[] = $contato;
        }
    }
    
    function alterarContato($ind, $novoContato){
        if (isset($this->contatos[$ind])){
            $this->contatos[$ind] = $novoContato;
        }
    }
    
    function removerContatoInd($ind){
         if (isset($this->contatos[$ind])){
             unset($this->contatos[$ind]);
         }
    }
    
    function buscarContatoInd($ind){
        if (isset($this->contatos[$ind])){
            return $this->contatos[$ind];
        } else {
            return null;
        }
    }
    
    function buscarContatoNome($nome){
        foreach ($this->contatos as $contato) {
            if($contato->getNome() == $nome){
                return $contato;
            }
        }
        return null;
    }
    
    function __toString() {
        $texto = 'Contatos da Agenda <br>';
        foreach ($this->contatos as $contato) {
            $texto = $texto.$contato.'<hr>';
        }
        return $texto;
    }
}