<?php
//check champs rempli
if(!isset($_POST['username']) || !isset($_POST['password']) || $_POST['username'] == '' || $_POST['password'] == '') {
	header('Location: login.php?error=1');
}
else {
	$prenom = $_POST['username'];
	$password = md5($_POST['password']);
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=noob;charset=utf8', 'root', '');
	$reponse = $bdd->query("SELECT * FROM users WHERE prenom='".$prenom."' AND password='".$password."'");
	$reponse = $reponse->fetch();
	if($reponse){
		$log = fopen('../logs/logs.txt', "a");
		fputs($log, date(DATE_RFC2822)." - ".$reponse['prenom']." Login sucessfully with ". $_SERVER['HTTP_USER_AGENT']."\r\n");
		session_start();
		$_SESSION['username'] = $reponse['prenom'];
		header('Location: index.php');
	}
	else{
		header('Location: login.php?error=2');
	}

}
?>