<?php

class User {
    protected $nome;
    protected $cognome;
    protected $mail;
    protected $numeroCarta;
    protected $cellulare;

    function __construct($_nome,$_cognome,$_mail){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->mail = $_mail;
    }

    public function setVerificaCarta($_numeroCarta){
        if(is_numeric($_numeroCarta) && strlen($_numeroCarta) == 16){
            $this->numeroCarta = $_numeroCarta;
        }elseif(!is_numeric($_numeroCarta)){
            throw new Exception('inserire solo numeri');
        }elseif(strlen($_numeroCarta) < 16){
            throw new Exception('i numeri devono essere 16');
        }
    }

    public function getVerificaCarta(){
        return $this->numeroCarta;
    }

    public function getDati(){
        return 'nome:' . $this->nome . '<br>' . 'cognome:' . $this->cognome . '<br>' . 'mail:' . $this->mail . '<br>' . 'numero carta:' . $this->numeroCarta;
    }
}