<?php
/** Commenti class
 * @author Erion
 * @copyright 2021 Erion
*/

class Articolo{
    public $testo;
    public $tag;
    // public $voto;
    // public $publicazione;
     
    public function __construct(string  $testo, string  $tag) {
        $this->testo = $testo;
        $this->tag = $tag;
    }
}