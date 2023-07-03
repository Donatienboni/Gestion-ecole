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
      <!-- <div class="navbar-brand">
        <a class="navbar-item mobile-aside-button">
          <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
        </a>
        <div class="navbar-item">
          <div class="control"><input placeholder="Search everywhere..." class="input"></div>
        </div>
      </div> -->
      <div class="navbar-brand is-right">
        <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
          <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
        </a>
      </div>
      <div class="navbar-menu" id="navbar-menu">
        <div class="navbar-end">


          <div class="navbar-item dropdown has-divider has-user-avatar">
            <a class="navbar-link">
              <div class="user-avatar">
                <img src="../dist/image/photo-avatar-profil.png" alt="mon user-avatar " class="rounded-full">
              </div>
              <div class="is-user-name">
                <span>
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
              </a>
            </div>
          </div>

          <!-- <a title="Log out" class="navbar-item desktop-icon-only">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>Deconnexion</span>
          </a> -->
        </div>
      </div>
    </nav>
    <!---------------------------------menu coter------------------------------------------->
    <aside class="aside is-placed-left is-expanded">
      <div class="aside-tools">
        <div>
          la <b class="font-black">Citadine</b>
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
        <ul class="menu-list">
          <li class="active">
            <a href="voiture-profile-index.php">
              <span class="icon"><i class="mdi mdi-car"></i></span>
              <span class="menu-item-label">voiture de profile</span>
            </a>
          </li>
        </ul>
        <p class="menu-label">Autre</p>
        <ul class="menu-list">
          <li class="--set-active-tables-html">
            <a href="tables.php">
              <span class="icon"><i class="mdi mdi-message"></i></span>
              <span class="menu-item-label">Message</span>
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
          Citadine
        </h1>

      </div>
    </section>

    <div class="notification blue">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div>
          <span class="icon"><i class="mdi mdi-car"></i></span>
          <b>Partie voiture</b>
        </div>

      </div>
    </div>
    <!----------------------------------debut ----------------------------------->

    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-car"></i></span>
          Voiture de page index
        </p>
        <a href="ajouter-voiture-profile.php" class="card-header-icon">
          <span class="button small green --jb-modal" id="button-ajouter">Ajouter</span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Prix</th>
              <th>nom du vehicule</th>
              <th>Detail</th>
              <th>images</th>
              <th></th>
              <th>Voir</th>
              <th>Modifier</th>
              <th>Supprimer</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM voiture_profile";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
              foreach ($query_run as $student) {
            ?>
                <tr>
                  <td><?= $student['id']; ?></td>
                  <td><?= $student['prix']; ?></td>
                  <td><?= $student['marque']; ?></td>
                  <td><?= $student['detail']; ?></td>
                  <td> <img  src="../dist/image/<?php echo $student['image']; ?>" alt="Photo des voiture" width="200px" height="200px"></td>
                  <td>
                  <td><a href="voir-voiture-profile.php?id=<?= $student['id']; ?>" class="button small green --jb-modal" id="button-voir">Voir</a></td>
                  <td><a href="modifier-voiture-profile.php?id=<?= $student['id']; ?>" class="button small green --jb-modal" id="button-modifier">Modifier</a></td>
                  <td>
                    <form action="code-ajouter-voiture.php" method="POST" class="d-inline">
                      <!---------------------action de traitement------------>
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