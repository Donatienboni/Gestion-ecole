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

    <title>Mdifier voiture</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Modifier voiture de profile
                            <a href="voiture-profile-index.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM voiture_profile WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code-ajouter-voiture.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>Prix</label>
                                        <!--------student['prix'] les noms des colones de tables voiture--------->
                                        <input type="text" name="prix" value="<?= $student['prix']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Marque</label>
                                        <!--------student['marque'] les noms des colones de tables voiture--------->
                                        <input type="text" name="marque" value="<?= $student['marque']; ?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Detail</label>
                                        <!--------student['detail'] les noms des colones de tables voiture--------->
                                        <input type="text" name="detail" value="<?= $student['detail']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>image</label>
                                        <!--------student['image'] les noms des colones de tables voiture--------->
                                        <input type="file" name="image" value="<?= $student['image']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
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
</body>

</html>