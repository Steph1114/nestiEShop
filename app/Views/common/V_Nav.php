<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
      Catégorie de recettes
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </li>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/nestiEshop/public">Accueil </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/nestiEshop/public/recipe">Recettes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/nestiEshop/public/article">Articles</a>
      </li>
      <?php if (session()->get('isLogged')) : ?>
      <li class="nav-item">
        <a class="nav-link" href="/nestiEshop/public/cart">Panier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/nestiEshop/public/profile">Profil</a>
      </li>
      <?php endif; ?>
      <?php if (session()->get('isLogged')) : ?>
        <li class="nav-item">
          <a class="nav-link" href="/nestiEshop/public/logout">Se Deconnecter</a>
        <?php endif; ?>
        <?php if (!session()->get('isLogged')) : ?>
          <li class="nav-item">
          <a class="nav-link" href="/nestiEshop/public/login">Se Connecter</a>
        <?php endif; ?>
        </li>
    </ul>
  </div>
</nav>
<body>