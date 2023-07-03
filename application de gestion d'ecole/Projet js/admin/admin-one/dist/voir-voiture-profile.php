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

    <title>Student View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>voir les detail
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

                                <div class="mb-3">
                                    <label>Prix</label>
                                    <p class="form-control">
                                        <?= $student['prix']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>nom du vehicule</label>
                                    <p class="form-control">
                                        <?= $student['marque']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Detail</label>
                                    <p class="form-control">
                                        <?= $student['detail']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>images</label>
                                    <p class="form-control"  width="50%" height="50%">
                                    <img  src="../dist/image/<?php echo $student['image']; ?>" alt="Photo des voiture" width="50%" height="50%">
                                    </p>
                                </div>

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