<?php
$connect = new PDO('mysql:host=localhost;dbname=blog', 'root', '');



// header('location:profile.php');
// echo ($_POST['name'] . $_POST['email']);
if (isset($_POST['save_student'])) {
    $insert = $connect->prepare("INSERT INTO connexionadmin (email,mdp) VALUES(?,?)");
    $insert->execute(array($_POST['name'], $_POST['email']));
    if ($insert_run) {
        $_SESSION['message'] = "Creation reussit";
        header("Location: profile.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Creation non reuissit";
        header("Location: ajouter-utilisateur.php");
        exit(0);
    }
}
