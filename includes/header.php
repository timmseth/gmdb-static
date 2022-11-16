  <nav id="gmdb_header" class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <?php echo '<a class="navbar-brand" href="'.$siteAbsolutePath.'/index.php">';?>
        <?php echo '<img src="'.$siteAbsolutePath.'/img/duck_only_large_outline_trans.png" alt="The GMDB Rubber Ducky Logo Small" width="24" height="24"> ';?>
        The GMDB
      </a>
      <!-- <a class="navbar-brand" href="#">The GMDB</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <?php echo '<a class="nav-link active" aria-current="page" href="'.$siteAbsolutePath.'/index.php">Home</a>';?>
          </li>
          <!-- DND Resources -->
          <li class="nav-item dropdown">
            <?php echo '<a class="nav-link dropdown-toggle" href="'.$siteAbsolutePath.'/DND/index.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">';?>
              DND Resources
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php echo '<li><a class="dropdown-item" href="'.$siteAbsolutePath.'/DND/index.php?tool=quickRandomContent">Quick Random Content</a></li>';?>
              <?php echo '<li><a class="dropdown-item" href="'.$siteAbsolutePath.'/DND/index.php?tool=spells">DND 5E Spells Grimoire</a></li>';?>
              <?php echo '<li><a class="dropdown-item" href="'.$siteAbsolutePath.'/DND/index.php?tool=1d100">Reddit 1d100 Resources</a></li>';?>
              <?php echo '<li><a class="dropdown-item" href="'.$siteAbsolutePath.'/DND/index.php?tool=userSubmittedLinks">User Submitted Links</a></li>';?>
              <?php echo '<li><a class="dropdown-item" href="'.$siteAbsolutePath.'/DND/index.php?tool=soundscapes">DND Soundscapes</a></li>';?>
              <?php echo '<li><a class="dropdown-item" href="'.$siteAbsolutePath.'/DND/index.php?tool=spells">5E Spellbook</a></li>';?>
            </ul>
          </li>
           <!-- Donate -->
          <li class="nav-item dropdown">
            <?php echo '<a class="nav-link dropdown-toggle" href="'.$siteAbsolutePath.'/DND/index.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">';?>
              Support Us
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#donate">Buy Me A Coffee!</a></li>
            <li><a class="dropdown-item" href="https://www.patreon.com/bePatron?u=3446771">Become a Patron!</a></li>
            </ul>
          </li>
        </ul>
        <form style="float:right;">
            <a href="https://www.patreon.com/bePatron?u=3446771" data-patreon-widget-type="become-patron-button">Become a Patron!</a><script async src="https://c6.patreon.com/becomePatronButton.bundle.js"></script>
        </form>
      </div>
    </div>
  </nav>
