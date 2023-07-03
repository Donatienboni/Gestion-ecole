<?php
session_start();
$abc = new PDO('mysql:host=localhost;dbname=db_gestion_ecole', 'root', '');

$verif = $abc->prepare("SELECT * FROM table_admin where email=? AND password=? "); 
$verif->execute(array($_POST['email'], $_POST['password'])); //////partie formulaire/////////
$trouve = $verif->rowcount();

$personneId = $verif->fetch();
// $id = $personneId['id'];

if ($trouve == 0) {
    $_SESSION['message'] = " Votre Mot de passe ou Email incorrect";
    header('location:index.php');
} else {
    // $_SESSION['message'] = " Valide ";
    header('location:admin-one/dist/index.php');

}
?>
// $email = $_POST["email"];
// $pass = $_POST["password"];

// // Requête de sélection de l'utilisateur correspondant à l'email et au mot de passe fournis
// $stmt = $conn->prepare("SELECT * FROM table_admin WHERE email = ? AND password = ?");
// $stmt->bind_param("ss", $email, $pass);
// $stmt->execute();

// // Récupération du résultat de la requête
// $result = $stmt->get_result();

// if ($result->num_rows > 0) {
//     // L'utilisateur existe, l'authentification réussie
//     $response = array("success" => true, "message" => "Authentification réussie !", "redirect" => "admin-one/dist/index.php");
//     echo json_encode($response);
// } else {
//     // L'utilisateur n'existe pas ou l'authentification a échoué
//     $response = array("success" => false, "message" => "Authentification échouée : identifiants incorrects.");
//     echo json_encode($response);
// }

// // Fermeture de la connexion et de la déclaration préparée
// $stmt->close();
// $conn->close();
