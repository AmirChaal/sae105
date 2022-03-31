<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">INDUSTRIAE PRESUL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link <?php switch ($current) {case 'accueil': echo 'active'; break; case 'donnees': echo ''; break; case 'contacts': echo ''; break; case 'galerie': echo ''; break;}?>" aria-current="page" href="index.php">Accueil</a>
        <a class="nav-link <?php switch ($current) {case 'accueil': echo ''; break; case 'donnees': echo 'active'; break; case 'contacts': echo ''; break; case 'galerie': echo ''; break;}?>" href="donnees.php">Données</a>
        <a class="nav-link <?php switch ($current) {case 'accueil': echo ''; break; case 'donnees': echo ''; break; case 'contacts': echo ''; break; case 'galerie': echo 'active'; break;}?>" href="galerie.php">galerie</a>
        <a class="nav-link <?php switch ($current) {case 'accueil': echo ''; break; case 'donnees': echo ''; break; case 'contacts': echo 'active'; break; case 'galerie': echo ''; break;}?>" href="contact.php">Contacts</a>
      </div>
    </div>
  </div>
</nav>
</header>