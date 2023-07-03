<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>

<body>


    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ajouter
                            <a href="index.php" class="btn btn-danger float-end">Retour</a>
                            <!------retour----------->

                        </h4>

                    </div>
                    <div class="card-body">
                        <form action="traitementmessage.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label>classe</label>
                                <input type="text" name="nom_classe" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Sauvegarder</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>