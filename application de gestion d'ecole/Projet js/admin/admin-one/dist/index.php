<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>

  <link rel="stylesheet" href="css/style.css">
  <!-- Tailwind is included -->
  <link rel="stylesheet" href="css/main.css?v=1628755089081">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="logo.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="logo.png" />
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6" />


  <meta name="description" content="Admin One - free Tailwind dashboard">

  <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>

<body>

  <div id="app">

    <nav id="navbar-main" class="navbar is-fixed-top">
      <div class="navbar-brand">
        <a class="navbar-item mobile-aside-button">
          <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
        </a>

        <!-- <div class="navbar-item">
          <div class="control">
            <form method="" action="GET">
            <input placeholder="Rechercher ......." class="input" name="recherche">
          </form>
       


          <?php
                        if (isset($_GET['recherche'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['recherche']);
                            $query = "SELECT name FROM students  WHERE recherche='$student_id' ";
                            $query_run = mysqli_query($con, $query);
                            

                            foreach ($query_run as $nom){
                              if(!empty($_GET['recherche'])){
                                if(str_contains($nom,$_GET['recherche'])){
                                  header('location:index.php');
                                }

                              }else{

                              }
                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>
                             <?php echo $student['name']; ?>           
                        <?php
                            } 
                        }
                        }
                        ?>
          </div>
        </div> -->

      </div>
      <div class="navbar-brand is-right">
        <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
          <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
        </a>
      </div>
      <!--------------------------------------------debut profile---------------------------------------->
      <div class="navbar-menu" id="navbar-menu">
        <div class="navbar-end">
          <div class="navbar-item dropdown has-divider has-user-avatar">
            <a class="navbar-link">
            <div class="user-avatar">
                <img src="../dist/image/photo-avatar-profil.png" alt="mon user-avatar " class="rounded-full">
              </div>

              <div class="is-user-name"><span>
                
              <!-- <?php echo $_SESSION["email"];?> -->

                </span></div>
              <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
            </a>

            <div class="navbar-dropdown">
              <a href="profile.php" class="navbar-item">
                <span class="icon"><i class="mdi mdi-account"></i></span>
                <span>Profile</span>
              </a>
              <a href="tables.php" class="navbar-item">
                <span class="icon"><i class="mdi mdi-email"></i></span>
                <span>Messages</span>
              </a>
              <hr class="navbar-divider">
            <a href="traitement-deconnexion.php" class="navbar-item">
              <!-- <a href="../../../admin/index.php" class="navbar-item"> -->
                <span class="icon"><i class="mdi mdi-logout"></i></span>
                <span>Deconnexion</span>
              </a>
            </div>
          </div>
          <!--------------------------------------------fin profile---------------------------------------->
        </div>
      </div>
    </nav>
    <!---------------------------------menu coter------------------------------------------->
    <aside class="aside is-placed-left is-expanded">
      <div class="aside-tools">
        <div>
          <b class="font-black">Gestion-Ecole</b>
        </div>
      </div>
      <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
          <li class="active">
            <a href="index.php">
              <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
              <span class="menu-item-label">Tableau de bord</span>
            </a>
          </li>
        </ul>
        <!-- <ul class="menu-list">
          <li class="active">
            <a href="voiture-profile-index.php">
              <span class="icon"><i class="mdi mdi-car"></i></span>
              <span class="menu-item-label">voiture de profile</span>
            </a>
          </li>
        </ul> -->
        <p class="menu-label">Autre</p>
        <ul class="menu-list">
          <li class="--set-active-tables-html">
            <a href="tables.php">
              <span class="icon"><i class="mdi mdi-message"></i></span>
              <span class="menu-item-label">Classes</span>
            </a>
          </li>
          <li class="--set-active-profile-html">
            <a href="profile.php">
              <span class="icon"><i class="mdi mdi-account-circle"></i></span>
              <span class="menu-item-label">Profile</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <!---------------------------------fin menu coter------------------------------------------->
    <section class="is-title-bar">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
          <li>Admin</li>
          <li>Tableau de bord</li>
        </ul>

      </div>
    </section>

    <section class="is-hero-bar">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
        Gestion-Ecole
        </h1>

      </div>
    </section>
<br>
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
     

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
          <div class="widget-label">
              <h3>
                Enregistrement Eleves
              </h3>
            <?php
            require 'dbcon.php';
            $query = "SELECT id FROM table_enregistrement ORDER BY id ";
            $query_run = mysqli_query($con, $query);
            $row = mysqli_num_rows($query_run);
            echo '<h1>' . $row . '</h1>';
            ?>

              
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
          <div class="widget-label">
              <h3>
                Garcons
              </h3>
            <?php
            require 'dbcon.php';
            $query = "SELECT * FROM table_enregistrement WHERE sexe = 'Masculin' ORDER BY id ";
            $query_run = mysqli_query($con, $query);
            $row = mysqli_num_rows($query_run);
            echo '<h1>' . $row . '</h1>';
            ?>

              
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-account mdi-48px"></i></span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
          <div class="widget-label">
              <h3>
                Filles
              </h3>
            <?php
            require 'dbcon.php';
            $query = "SELECT * FROM table_enregistrement WHERE sexe = 'Feminin' ORDER BY id ";
            $query_run = mysqli_query($con, $query);
            $row = mysqli_num_rows($query_run);
            echo '<h1>' . $row . '</h1>';
            ?>

              
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-account mdi-48px"></i></span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
          <div class="widget-label">
              <h3>
                classes
              </h3>
            <?php
            require 'dbcon.php';
            $query = "SELECT id FROM table_classe ORDER BY id ";
            $query_run = mysqli_query($con, $query);
            $row = mysqli_num_rows($query_run);
            echo '<h1>' . $row . '</h1>';
            ?>

              
            </div>
            <span class="icon widget-icon text-blue-500"><i class="mdi mdi-home mdi-48px"></i></span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                utilisateurs
              </h3>
            <?php
            require 'dbcon.php';
            $query = "SELECT id FROM table_admin ORDER BY id ";
            $query_run = mysqli_query($con, $query);
            $row = mysqli_num_rows($query_run);
            echo '<h1>' . $row . '</h1>';
            ?>

              
            </div>
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-account mdi-48px"></i></span>
          </div>
        </div>
      </div>



    </div>
    <div class="notification blue">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div>
          <span class="icon"><i class="mdi mdi-car"></i></span>
          <b>Partie Etudiants</b>
        </div>

      </div>
    </div>
    <!----------------------------------debut partie voiture ----------------------------------->

    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-car"></i></span>
          Etudiants
        </p>
        <a href="student-create.php" class="card-header-icon">
          <span class="button small green --jb-modal" id="button-ajouter">Ajouter</span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
            <tr>
              <th>id</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Sexe</th>
              <th>Date_Naissance</th>
              <th>Num classe</th>
              
              <th></th>
              <th>Voir</th>
              <th>Modifier</th>
              <th>Supprimer</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM table_enregistrement";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
              foreach ($query_run as $student) {
            ?>
                <tr>
                  <td><?= $student['id']; ?></td>
                  
                 <!-- <td> <img  src="../dist/image/<?php echo $student['image']; ?>" alt="Photo des voiture" width="200px" height="200px"></td> -->
                  <td><?= $student['nom']; ?></td>
                  <td><?= $student['prenom']; ?></td>
                  <td><?= $student['sexe']; ?></td>
                  <td><?= $student['date_Naissance']; ?></td>
                  <td><?= $student['classe_id']; ?></td>
                  <td>
                  <td><a href="student-view.php?id=<?= $student['id']; ?>" class="button small green --jb-modal" id="button-voir">Voir</a></td>
                  <td><a href="student-edit.php?id=<?= $student['id']; ?>" class="button small green --jb-modal" id="button-modifier">Modifier</a></td>
                  <td>
                    <form action="code.php" method="POST" class="d-inline">
                      <button type="submit" name="delete_student" data-target="sample-modal" value="<?= $student['id']; ?>" class="button small red --jb-modal" onclick="return confirmation();" id="button-supprimer">Supprimer</button>
                    </form>
                  </td>
                  </td>
                </tr>
            <?php
              }
            } else {
              echo "<h5> Aucune Voiture </h5>";
            }
            ?>

          </tbody>
        </table>
        </footer>


      </div>
    </div>
    <br>
    <!--------------------------------------------------fin partie voiture ---------------------------------------------->

    <!---------------------------------------------voir message partie 1 -------------------------------------------------->
    <section class="section main-section">
      <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
        
        <div class="card">
          <header class="card-header">
            <p class="card-header-title" id="barre-message">
              <span class="icon"><i class="mdi mdi-message"></i></span>
              Classes
            </p>
          </header>
          <div>
            <form>
              <table>
                <thead>
                  <tr>
                    <th>ID</th> <!-- ici les informations de la de la table -->
                    <th>Nom</th>

                    <th></th>
                    <th>Voir</th>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM table_classe";
                  $query_run = mysqli_query($con, $query);

                  if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $student) {
                  ?>
                      <tr>
                        <td><?= $student['id']; ?></td><!-- ici les informations de la de la base de donne -->
                        <td><?= $student['nom_classe']; ?></td>
                        
                        <td>
                        <td><a href="voir-message.php?id=<?= $student['id']; ?>" class="button small green --jb-modal" id="button-voir">Voir</a> </td>
                        </td>
                      </tr>
                  <?php
                    }
                  } else {
                    echo "<h5> Aucun Message </h5>";
                  }
                  ?>
                  <hr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
        <!---------------------------------------------fin partie 1 -------------------------------------------------->

        <!--------------------------------------------- partie 2 -------------------------------------------------->
        <div class="card">
          <header class="card-header">
            <p class="card-header-title" id="barre-profile">
              <span class="icon"><i class="mdi mdi-account-circle"></i></span>
              Utilisateur
            </p>
          </header>
          <div>
            <form>
              <table>
                <thead>
                  <tr>
                    <th>ID</th> <!-- ici les informations de la de la table -->
                    <th>Email</th>
                    <!-- <th>Mot de passe</th> -->
                    <!-- <th>Nom utilisateur</th> -->
                    <th></th>
                    <th>Voir</th>



                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM table_admin";
                  $query_run = mysqli_query($con, $query);

                  if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $student) {
                  ?>
                      <tr>
                        <!-- ici les informations de la de la base de donne -->
                        <td><?= $student['id']; ?></td>
                        <td><?= $student['email']; ?></td>
                        <!-- <td><?= $student['password']; ?></td> -->
                        <td>

                        <td><a href="voir-utilisateur.php?id=<?= $student['id']; ?>" class="button small green --jb-modal" id="button-voir">Voir</a></td>

                        </td>
                      </tr>
                  <?php
                    }
                  } else {
                    echo "<h5> Aucun Message </h5>";
                  }
                  ?>
                  <hr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
    </section>


    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-car"></i></span>
          Etudiants
        </p>
        <!-- <a href="student-create.php" class="card-header-icon">
          <span class="button small green --jb-modal" id="button-ajouter">Ajouter</span>
        </a> -->
      </header>
      <div class="card-content">
        <table>
          <thead>
            <tr>
              <th>id</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Sexe</th>
              <th>classe</th>
              <th>Montant</th>
              <th>Date</th>
              <th></th>
              <th>Imprimer</th>
              <!-- <th>Modifier</th>
              <th>Supprimer</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT table_frais.montant , 
            table_frais.date_limite_payement , 
            table_enregistrement.nom, 
            table_enregistrement.prenom,
            table_enregistrement.sexe,
            table_classe.nom_classe, 
            table_enregistrement.id
             FROM table_frais
            JOIN table_enregistrement ON table_enregistrement.classe_id =  table_frais.classe_id 
            JOIN table_classe ON table_classe.id = table_enregistrement.classe_id
            
            ";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
              foreach ($query_run as $student) {
            ?>
                <tr>
                  <td><?= $student['id']; ?></td>
                  <td><?= $student['nom']; ?></td>
                  <td><?= $student['prenom']; ?></td>
                  <td><?= $student['sexe']; ?></td>
                  <td><?= $student['nom_classe']; ?></td>
                  <td><?= $student['montant']; ?></td>
                  <td><?= $student['date_limite_payement']; ?></td>
                  <td>
                  <td><a href="../../../../pdf/recus.php?id=<?= $student['id']; ?>" class="button small green --jb-modal" id="button-voir">Imprimer</a></td>
                  <!-- <td><a href="student-edit.php?id=<?= $student['id']; ?>" class="button small green --jb-modal" id="button-modifier">Modifier</a></td>
                  <td>
                    <form action="code.php" method="POST" class="d-inline">
                      <button type="submit" name="delete_student" data-target="sample-modal" value="<?= $student['id']; ?>" class="button small red --jb-modal" onclick="return confirmation();" id="button-supprimer">Supprimer</button>
                    </form>
                  </td> -->
                  </td>
                </tr>
            <?php
              }
            } else {
              echo "<h5> Aucune Voiture </h5>";
            }
            ?>

          </tbody>
        </table>
        </footer>
      </div>
    </div>
    <br> <br> <br>
    <!--------------------------------------------- partie 2 -------------------------------------------------->
    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="js/chart.sample.min.js"></script>


    <script>
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '658339141622648');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1" /></noscript>

    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

    <!-- mon scrpit alert -->
    <script src="monjs/script.js"></script>

</body>

</html>