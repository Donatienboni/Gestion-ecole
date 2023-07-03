<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM table_enregistrement WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Suppression reuissit";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Suppression non reuissit";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
    $sexe = mysqli_real_escape_string($con, $_POST['sexe']);
    $classe_id = mysqli_real_escape_string($con, $_POST['classe_id']);
    $Date_Naissance = mysqli_real_escape_string($con, $_POST['date_Naissance']);

    $query = "UPDATE table_enregistrement SET nom='$nom',prenom='$prenom',sexe='$sexe',classe_id='$classe_id',date_Naissance='$Date_Naissance' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Modification appliquer avec succès";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Modification non appliquer ";
        header("Location: student-edit.php");
        exit(0);
    }
}


/////////////////////////////////////////////////////////////////////////

if (isset($_POST['save_student'])) {
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
    $sexe = mysqli_real_escape_string($con, $_POST['sexe']);
    $classe_id = mysqli_real_escape_string($con, $_POST['choix_classe']);
    $Date_Naissance = mysqli_real_escape_string($con, $_POST['date_Naissance']);
// taitement images
    // $course=$_FILES['course']['name']; //le nom de la courses et name son introduction ////// == name="course"
    // $chemin="../dist/image".$course;     // $chemin = "image/" ==le lien de l'image
    // move_uploaded_file($_FILES['course']['tmp_name'],$chemin);
    

    $query = "INSERT INTO table_enregistrement (nom,prenom,sexe,classe_id,date_Naissance) VALUES ('$nom','$prenom','$sexe','$classe_id','$Date_Naissance')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Creation reussit";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Creation non reuissit";
        header("Location: student-create.php");
        exit(0);
    }
}