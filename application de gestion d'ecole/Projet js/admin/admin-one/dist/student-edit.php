<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Modifier voiture</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Modifier voiture
                            <a href="index.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM table_enregistrement WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">
                                    <div class="mb-3">
                                        <label>Nom</label>               <!-- variable 'description' qui est dans la DB   -->
                                        <input type="text" name="nom" value="<?= $student['nom']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Prenom</label>               <!-- variable 'description' qui est dans la DB   -->
                                        <input type="text" name="prenom" value="<?= $student['prenom']; ?>" class="form-control">
                                    </div>        
                                    <div class="mb-3">
                                        <label>sexe</label>               <!-- variable 'description' qui est dans la DB   -->
                                        <input type="radio" name="sexe" value="Masculin" class="form-control"> M
                                        <input type="radio" name="sexe" value="Feminin" class="form-control"> F
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label>classe id</label>               <!-- variable 'description' qui est dans la DB   -->
                                        <input type="text" name="classe_id" value="<?= $student['classe_id']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Date de Naissance</label>               <!-- variable 'description' qui est dans la DB   -->
                                        <input type="date" name="date_Naissance" value="<?= $student['date_Naissance']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary" onclick="return confirmationEdit();">
                                            Appliquer la modification
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- mon scrpit alert -->
    <script src="monjs/script.js"></script>
</body>

</html>