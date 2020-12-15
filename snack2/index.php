<?php
/*Passare 3 parametri GET: name, mail e age e verificare (cercando nella documentazione i metodi che non conosciamo) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/

// 3 parametri GET
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];
// echo $name;
// echo $email;
// echo $age;

// CONTROLLI
// controllo lunghezza stringa nome
$correctName = (strlen($name) > 3);
// echo $correctName;

// controllo punto e chioccola email
$correctEmail = strpos($email, '.') !== false && strpos($email, '@');
// echo $correctEmail;

// controllo età = numero
$correctAge = is_numeric($age) && ($age > 0);
// echo $correctAge;

if ($correctName && $correctEmail && $correctAge) {
    echo 'Accesso riuscito';
} else {
    echo 'Accesso negato';
};
?>
