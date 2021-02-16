<!-- php-oop-2
Istruzioni:
Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.

Crea una classe User che rappresenti quella tabella, 
    e usala per stampare in pagina i dati di alcuni Users.

Il database e la tabella non devono essere realmente creati.

Bonus (non tanto facoltativo):
Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.

Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi.

@qui cercate di pensare anche ad una classe che possa avere una sub-class e fate pratica con l'extends -->
<?php
include __DIR__ . '.classes/articolo.php';
include __DIR__ . '.classes/commenti.php';

$articoli = [
    new Articolo('testo', 'arte'),
    new Articolo('testo1', 'musica'),
    new Articolo('testo2', 'fotografia'),
    new Articolo('testo2', 'videgames'),
];

foreach ($articoli as $articolo) {
    var_dump($articolo);
}