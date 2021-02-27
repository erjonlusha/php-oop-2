<?php
// php-oop-2
// Istruzioni:
// Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.

// Crea una classe User che rappresenti quella tabella, 
//     e usala per stampare in pagina i dati di alcuni Users.

// Il database e la tabella non devono essere realmente creati.

// Bonus (non tanto facoltativo):
// Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.

// Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
// Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi.

// @qui cercate di pensare anche ad una classe che possa avere una sub-class e fate pratica con l'extends
include __DIR__ . '/classes/articolo.php';
include __DIR__ . '/classes/commenti.php';
include __DIR__ . '/classes/user.php';
$articoli = [
    new Articolo('testo', 'arte'),
    new Articolo('testo1', 'musica'),
    new Articolo('testo2', 'fotografia'),
    new Articolo('testo2', 'videgames'),
];

$users = [
    new User('idArticolo', 'txt_comment', 'voto', 'ciao', '1', 'Mario', 'Rossi', 'mario@rossi.it'),
    new User('idArticolo', 'txt_comment', 'voto', 'Scemo', '2', 'Mario', 'Balotelli', 'mario@balotelli.it'),
    new User('idArticolo', 'txt_comment', 'voto', 'ciao', '3', 'Paolo', 'Bianchi', 'paolo@bianchi.it'),
    new User('idArticolo', 'txt_comment', 'voto', 'ciao', '4', 'Giuseppe', 'verdi', 'giuseppe@verdi.it'),
];
//    parent::__construct($idArticolo, $txt_comment, $voto, $risp);
//         $this->idUser = $idUser;
//         $this->name = $name;
//         $this->surname = $surname;
//         $this->email = $email;
// var_dump($users);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
<?php
foreach ($users as $value) { ?>
        <div class="card">
            <h2> <?php echo $value -> getName() ?></h2>
            <p> Email: <?php echo $value -> getEmail() ?></p>
            <p> Commento: <?php echo $value -> getTxt_comment() ?></p>
            <small> Riposta: <?php echo $value -> getRisp() ?></small>

        </div>
<?php } ?> 
</p>

<div>
<?php var_dump($users); ?>
</div>
</body>
</html>