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
    <link rel="stylesheet" href="css/style1.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <title>Ajouter Utilisateur</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ajouter utilisateur
                            <a href="profile.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>

                    <div class="card-body">

                        <div class="conteneursytle">
                            <form id="form" action="code-utilisateur.php" method="POST">
                                <!-- <table> -->
                                <input type="hidden" name="student_id">

                                <div class="mb-3">
                                    <label>Nom </label>
                                    <input type="text" name="nom" id="username" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Pseaudo</label>
                                    <input type="text" name="Pseaudo" id="Pseaudo" required class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Mot de passe </label>
                                    <input type="text" name="password" id="password" required class="form-control">
                                    <div id="passwordStrength"></div><br>
                                </div>
                                <div class="mb-3">
                                    <label>Confirme Mot de passe </label>
                                    <input type="text" name="Confirme_password" id="password2" required class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="save_student" class="btn btn-primary">
                                        Appliquer
                                    </button>
                                </div>
                                <!-- </table> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        $(document).ready(function() {
            $('#form').submit(function(event) {
                event.preventDefault(); // Empêche le rechargement de la page

                // Réinitialiser les messages d'erreur et les styles des champs
                $('.error-message').text('');
                $('.form-control').removeClass('error success');

                // Récupérer les données du formulaire
                var formData = $(this).serialize();
                var username = $('#username').val();
                var Pseaudo = $('#Pseaudo').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var password2 = $('#password2').val();

                // Vérifier les champs vides et la longueur du mot de passe
                var isValid = true;

                if (username.trim() === '') {
                    $('#username').siblings('.error-message').text('Le nom d\'utilisateur est requis');
                    $('#username').closest('.form-control').addClass('error');
                    isValid = false;
                }
                if (Pseaudo.trim() === '') {
                    $('#Pseaudo').siblings('.error-message').text('Le nom d\'utilisateur est requis');
                    $('#Pseaudo').closest('.form-control').addClass('error');
                    isValid = false;
                }
                if (email.trim() === '') {
                    $('#email').siblings('.error-message').text('L\'email est requis');
                    $('#email').closest('.form-control').addClass('error');
                    isValid = false;
                }

                if (password.trim() === '') {
                    $('#password').siblings('.error-message').text('Le mot de passe est requis');
                    $('#password').closest('.form-control').addClass('error');
                    isValid = false;
                } else if (password.length < 4) {
                    $('#password').siblings('.error-message').text('Le mot de passe doit contenir au moins 5 caractères');
                    $('#password').closest('.form-control').addClass('error');
                    isValid = false;
                }

                if (password2.trim() === '') {
                    $('#password2').siblings('.error-message').text('La confirmation du mot de passe est requise');
                    $('#password2').closest('.form-control').addClass('error');
                    isValid = false;
                } else if (password !== password2) {
                    $('#password2').siblings('.error-message').text('Les mots de passe ne correspondent pas');
                    $('#password2').closest('.form-control').addClass('error');
                    isValid = false;
                }

                if (isValid) {
                    // Ajouter la classe 'success' aux champs valides
                    $('.form-control').addClass('success');

                    // Envoyer les données du formulaire via AJAX
                    $.ajax({
                        type: 'POST',
                        url: 'code-utilisateur.php',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            // Traitement de la réponse en cas de succès
                            if (response.success) {
                                // Réinitialiser le formulaire
                                $('#form')[0].reset();
                                // Afficher un message de succès
                                $('.success-message').text(response.message);
                            } else {
                                // Afficher un message d'erreur
                                $('.error-message').text(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            // Traitement de la réponse en cas d'erreur
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/validationform.js"></script>
</body>

</html>