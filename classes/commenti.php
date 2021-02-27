<?php

/** Commenti class
 * @author Erion
 * @copyright 2021 Erion
*/


class Commenti{
    protected $idArticolo;
    public $txt_comment;
    public $voto;
    public $risp;

    public function __construct(string  $idArticolo, string  $txt_comment, string  $voto, string  $risp) {
        $this->idArticolo = $idArticolo;
        $this->txt_comment = $txt_comment;
        $this->voto = $voto;
        $this->risp = $risp;
    }
}