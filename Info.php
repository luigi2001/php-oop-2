<?php

require_once 'Lista.php';
require_once 'Trama.php';

class Info extends Lista {

    private $sconto;

    use Trama;

    public function setSconto(){
        if($this->prezzo > 10){
            $this->sconto = '50%';
        }
    }

    public function getSconto(){
        return $this->sconto;
    }

    public function getInfo(){
        return 'titolo:' . $this->titolo . '<br>' . 'regista:' . $this->regista . '<br>' . 'anno:' . $this->anno . '<br>' . 'casa di produzione:' . $this->casaDiProduzione . '<br>' . 'prezzo:' . $this->prezzo . '<br>' . 'sconto:' . $this->sconto;
    }
}