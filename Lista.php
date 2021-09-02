<?php

class Lista {
    protected $titolo;
    protected $casaDiProduzione;
    protected $regista;
    protected $anno;
    protected $prezzo;

    function __construct($_titolo,$_regista,$_anno,$_prezzo){
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->anno = $_anno;
        $this->prezzo = $_prezzo;
    }

    public function getInfo(){
        return 'titolo:' . $this->titolo . '<br>' . 'regista:' . $this->regista . '<br>' . 'anno:' . $this->anno . '<br>' . 'casa di produzione:' . $this->casaDiProduzione . '<br>' . 'prezzo:' . $this->prezzo;
    }
}