<?php
include_once __DIR__ . '/commenti.php';
/** Commenti class
 * @author Erion
 * @copyright 2021 Erion
*/

class User extends Commenti{
    public $idUser;
    public $name;
    public $surname;
    public $email;
    
    public function __construct(string  $idArticolo, string  $txt_comment, string  $voto, string  $risp, string $idUser, string $name, string $surname, string $email) {
        parent::__construct($idArticolo, $txt_comment, $voto, $risp);
        $this->idUser = $idUser;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getTxt_comment()
    {
        return $this->txt_comment;
    }

    public function getRisp()
    {
        return $this->risp;
    }
}
