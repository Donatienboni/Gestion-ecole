<?php
session_start();
require 'dbcon.php';
//===========================================debut suppresion=====================================//
if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM table_classe WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Suppression reuissit";
        header("Location:tables.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Suppression non reuissit";
        header("Location: tables.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $nom_classe = mysqli_real_escape_string($con, $_POST['nom_classe']);



    $query = "UPDATE table_classe SET nom_classe='$nom_classe' WHERE id='$student_id' ";
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
    
    $nom_classe= mysqli_real_escape_string($con, $_POST['$nom_classe']);
   

    $query = "INSERT INTO table_classe (nom_classe) VALUES ('$nom_classe')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Creation reussit";
        header("Location: tables.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Creation non reuissit";
        header("Location: messagre-create.php");
        exit(0);
    }
    
}