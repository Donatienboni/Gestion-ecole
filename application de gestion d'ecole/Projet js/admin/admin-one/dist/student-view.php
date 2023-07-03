<?php
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
    <link rel="stylesheet" href="css/monstyle.css">

    <title>Student View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>voir les detail
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
                                <div class="mb-3">
                                    <label>Nom</label>
                                    <p class="form-control">
                                        <?= $student['nom']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Prenom</label>
                                    <p class="form-control">
                                        <?= $student['prenom']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Sexe</label>
                                    <p class="form-control">
                                        <?= $student['sexe']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>id classe</label>
                                    <p class="form-control">
                                        <?= $student['classe_id']; ?>
                                    </p>
                                </div>                                
                                <div class="mb-3">
                                    <label>Date de Naissance</label>
                                    <p class="form-control">
                                        <?= $student['date_Naissance']; ?>
                                    </p>
                                </div>
                                <!-- <div class="mb-3">
                                    <label>images</label>
                                    <p class="form-control" id="form-p">
                                    <img  src="../dist/image/<?php echo $student['image']; ?>" alt="Photo des voiture" width="100%" height="100%">
                                    </p>
                                </div> -->

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