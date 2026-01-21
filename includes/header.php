<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vite & Gourmand</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS personnalisé -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

<header class="custom-header">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

      <!-- Logo -->
      <a class="logo navbar-brand" href="#">
        <img src="../assets/img/logo.webp" alt="Logo Vite & Gourmand">
      </a>

      <!-- Burger Bootstrap -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#mainNavbar"
        aria-controls="mainNavbar"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navigation -->
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">ACCUEIL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NOS MENUS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONNEXION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACT</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
</header>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
