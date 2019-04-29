<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=noob;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO chat(message,de) VALUES (:message,:de)');
$req->execute(array(
	'message' => $_POST['message'],
	'de' => $_SESSION['username']
));