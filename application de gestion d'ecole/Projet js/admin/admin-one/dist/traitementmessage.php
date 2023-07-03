<?php
$connect = new PDO('mysql:host=localhost;dbname=db_gestion_ecole', 'root', '');

$insert = $connect->prepare("INSERT INTO table_classe(nom_classe) VALUES(?)");
$insert->execute(array($_POST['nom_classe']));

header('location:tables.php');

//nom base de donnee =blog |nom table =tbmessage |      nom / mail /sms

//message email nom


// $connect = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

// $insert = $connect->prepare("INSERT INTO connexionadmin (email,mdp,nom,telephone) VALUES(?,?,?,?)");
// $insert->execute(array($_POST['email'], $_POST['password'], $_POST['name'], $_POST['phone']));

// header('location:index.html');