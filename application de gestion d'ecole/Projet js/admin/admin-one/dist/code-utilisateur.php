<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM table_admin WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Suppression reuissit";
        header("Location: profile.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Suppression non reuissit";
        header("Location: profile.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $Pseaudo= mysqli_real_escape_string($con, $_POST['Pseaudo']);
    $password= mysqli_real_escape_string($con, $_POST['password']);
    $Confirme_password= mysqli_real_escape_string($con, $_POST['Confirme_password']);

    $query = "UPDATE table_admin SET nom='$nom', email='$email', Pseaudo='$Pseaudo', password='$password' , Confirme_password='$Confirme_password' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Modification appliquer avec succès";
        header("Location: profile.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Modification non appliquer ";
        header("Location: edit-utilisateur.php");
        exit(0);
    }
}

if (isset($_POST['save_student'])) {
    
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $Pseaudo= mysqli_real_escape_string($con, $_POST['Pseaudo']);
    $password= mysqli_real_escape_string($con, $_POST['password']);
    $Confirme_password= mysqli_real_escape_string($con, $_POST['Confirme_password']);

    $query = "INSERT INTO table_admin (nom,email,Pseaudo,password,Confirme_password) VALUES ('$nom','$email','$Pseaudo','$password','$Confirme_password')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Creation reussit";
        header("Location: profile.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Creation non reuissit";
        header("Location: ajouter-utilisateur.php");
        exit(0);
    }
    // echo ("mail =" . $_POST['name'] . "  \/ " . " mot de passe =" . $_POST['email'] . "\/" . "nom =" . $_POST['nom'] . "  \/ " . " phone=" . $_POST['telephone']);
}


// $insert = $connect->prepare("INSERT INTO connexionadmin (email,mdp) VALUES(?,?)");
// $insert->execute(array($_POST['name'], $_POST['email']));
