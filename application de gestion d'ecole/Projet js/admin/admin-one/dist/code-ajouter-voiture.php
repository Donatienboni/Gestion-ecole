<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM voiture_profile WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Suppression reuissit";
        header("Location: voiture-profile-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Suppression non reuissit";
        header("Location: voiture-profile-index.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['prix']);
    $email = mysqli_real_escape_string($con, $_POST['marque']);
    $phone = mysqli_real_escape_string($con, $_POST['detail']);
    $course = mysqli_real_escape_string($con, $_POST['image']);

    $query = "UPDATE voiture_profile SET prix='$name', marque='$email', detail='$phone', image='$course' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Modification appliquer avec succès";
        header("Location: voiture-profile-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Modification non appliquer ";
        header("Location: modifier-voiture-profile.php");
        exit(0);
    }
}


if (isset($_POST['save_student'])) {
    $prix = mysqli_real_escape_string($con, $_POST['prix']);
    $marque = mysqli_real_escape_string($con, $_POST['marque']);
    $detail = mysqli_real_escape_string($con, $_POST['detail']);
    // $course = mysqli_real_escape_string($con, $_POST['course']);

    $iamge = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1)); //le nom de la courses et name son introduction ////// == name="course"
    $nom_photo = $_POST['nom'] . date('Ymdhis') . "." . $iamge;
    $chemin = "../dist/image/".$nom_photo;     // $chemin = "image/" ==le lien de l'image
   
    $resutat = move_uploaded_file($_FILES['image']['tmp_name'], $chemin);

    $query = "INSERT INTO voiture_profile (prix,marque,detail,image) VALUES ('$prix','$marque','$detail','$nom_photo')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Creation reussie";
        header("Location: voiture-profile-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Creation non reuissit";
        header("Location: ajouter-voiture-profile.php");
        exit(0);
    }
}
