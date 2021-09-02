<?php

class User {
    protected $nome;
    protected $cognome;
    protected $mail;
    protected $numeroCarta;
    protected $dataDiScadenza;
    protected $cellulare;

    function __construct($_nome,$_cognome,$_mail){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->mail = $_mail;
    }

    public function setVerificaCarta($_numeroCarta,$_dataDiScadenza){
        if(is_numeric($_numeroCarta) && strlen($_numeroCarta) == 16 && strtotime(date(m/Y)) < strtotime($_dataDiScadenza)){
            $this->numeroCarta = $_numeroCarta;
            $this->dataDiScadenza = $_dataDiScadenza;
        }elseif(!is_numeric($_numeroCarta)){
            throw new Exception('inserire solo numeri');
        }elseif(strlen($_numeroCarta) < 16){
            throw new Exception('i numeri devono essere 16');
        }elseif(strtotime(date(m/Y)) > strtotime($_dataDiScadenza)){
            throw new Exception('la carta è scaduta');
        }
    }

    public function getVerificaCarta(){
        return $this->numeroCarta;
        return $this->dataDiScadenza;
    }

    public function getDati(){
        return 'nome:' . $this->nome . '<br>' . 'cognome:' . $this->cognome . '<br>' . 'mail:' . $this->mail . '<br>' . 'numero carta:' . $this->numeroCarta . '<br>' . 'data scadenza:' . $this->dataDiScadenza;
    }
}