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

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
            <div class="notification blue">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
                    <div>
                        <h4>Voir utilisateur
                            <a href="profile.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                </div>
            </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM table_admin WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">
                                    <div class="mb-3">
                                        <label>id</label>
                                        <input type="text" name="nom" value="<?= $student['id']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="name" value="<?= $student['email']; ?>" class="form-control">
                                    </div>                                    

                                    <div class="mb-3">
                                        <label>Pseaudo</label>
                                        <input type="text" name="Pseaudo" value="<?= $student['Pseaudo']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nom</label>
                                        <input type="text" name="nom" value="<?= $student['nom']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Mot de passe </label>
                                        <input type="text" name="email" value="<?= $student['password']; ?>" class="form-control">
                                    </div>                                    
                                    <div class="mb-3">
                                        <label>Mot de passe </label>
                                        <input type="text" name="email" value="<?= $student['Confirme_password']; ?>" class="form-control">
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