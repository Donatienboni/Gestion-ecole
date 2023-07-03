<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Site made with Mobirise Website Builder v5.6.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.5, mobirise.com">
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Home">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">


  <title>Home</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap">
  </noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

  <section data-bs-version="5.1" class="form6 cid-tn9tiMxjfE" id="form6-0">
    <div class="container">
      <div class="mbr-section-head">
        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
          <strong>Connexion admin</strong>
        </h3>
      </div>

      <div class="row justify-content-center mt-4">

        <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">

          <form action="traitementadmin.php" method="POST" id="form" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name">

            <?php include('message-de-validation.php') ?>
            <!-- <img src="admin-one/dist/logo.png" alt="mon logo">    -->
            <input type="hidden" name="email" data-form-email="true" value="GlRXnfCt0kQl3UzVMJ1f5AYwVYiku2i5F3Gw+UZHYKwOvVHdhT/UfOY8pYWmrM0h2MHTpwwAU6PDGtU4EnRgl4jX53m678Q22PkXE0qekP0DW3cB49l374y9dB9X880u">
            <div class="dragArea row">
              <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                <input type="email" name="email" id="email" placeholder="Email" data-form-field="name" class="form-control" value="" id="name-form6-0">
                <small class="error-message"></small>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                <input type="password" name="password" id="password" placeholder="Mot de passe" data-form-field="email" class="form-control" value="" id="email-form6-0">
                <small class="error-message"></small>
              </div>
              <div class="col-auto mbr-section-btn align-center">
                <button type="submit" class="btn btn-primary display-4">Connexion</button>
              </div>


            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- <script>
    $(document).ready(function() {
      var passwordAttempts = 0; // Variable pour suivre le nombre de tentatives de mot de passe incorrectes

      $('#form').submit(function(event) {
        event.preventDefault(); // Empêche le rechargement de la page

        // Réinitialiser les messages d'erreur et les styles des champs
        $('.error-message').text('');
        $('.form-control').removeClass('error success');

        // Récupérer les données du formulaire
        var formData = $(this).serialize();
        var email = $('#email').val();
        var password = $('#password').val();

        // Vérifier les champs vides
        var isValid = true;

        if (email.trim() === '') {
          $('#email').siblings('.error-message').text('L\'email est requis');
          $('#email').closest('.form-control').addClass('error');
          isValid = false;
        }

        if (password.trim() === '') {
          $('#password').siblings('.error-message').text('Le mot de passe est requis');
          $('#password').closest('.form-control').addClass('error');
          isValid = false;
        }

        if (isValid) {
          // Ajouter la classe 'success' aux champs valides
          $('.form-control').addClass('success');

          // Vérifier le mot de passe
          if (password === password) { // Remplacez 'motdepasse' par le mot de passe correct
            // Réinitialiser le nombre de tentatives de mot de passe incorrectes
            passwordAttempts = 0;

            // Envoyer les données du formulaire via AJAX
            $.ajax({
              type: 'POST',
              url: 'traitementadmin.php',
              data: formData,
              dataType: 'json',
              success: function(response) {
                // Traitement de la réponse en cas de succès
                if (response.success) {
                  // Réinitialiser le formulaire
                  $('#form')[0].reset();
                  // Afficher un message de succès
                  $('.success-message').text(response.message);
                  // Rediriger vers la page espace.php après 2 secondes
                  setTimeout(function() {
                    window.location.href = response.redirect;
                  }, 2000);
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
          } else {
            // Incrémenter le nombre de tentatives de mot de passe incorrectes
            passwordAttempts++;

            // Afficher un message d'erreur
            $('.error-message').text('Mot de passe incorrect');

            // Vérifier si le nombre de tentatives a atteint la limite
            if (passwordAttempts >= 3) {
              // Désactiver le bouton de soumission
              $('button[type="submit"]').prop('disabled', true);
              // Afficher un message de suspension
              $('.error-message').text('Trop de tentatives de mot de passe incorrectes. Votre compte est suspendu.');
            }
          }
        }
      });
    });
  </script> -->

</body>

</html>