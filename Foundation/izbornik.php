<!-- pocetak izbornik -->
<div class="title-bar" data-responsive-toggle="example-animated-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-animated-menu" data-animate="hinge-in-from-top spin-out">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"><?= $naslovAPP; ?></li>
      <li><a href="index.php">Početna</a></li>
      <li>
        <a href="#">Naši proizvodi</a>
        <ul class="menu vertical">
          <li><a href="kulen.php">Kulen</a></li>
          <li><a href="kobasica.php">Kobasica</a></li>
          <li><a href="cvarci.php">Čvarci</a></li>
        </ul>
      </li>
      <li><a href="onama.php">O nama</a></li>
      <li><a href="kontakt.php">Kontakt</a></li>
    </ul>
  </div>
</div>
<!-- kraj izbornik -->