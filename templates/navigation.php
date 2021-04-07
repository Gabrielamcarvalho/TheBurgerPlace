
  <!-- navigation bar -->
    <header class="header" id="header">
      <!-- navbar -->

      <nav class="navbar">
        <span class="navbar-toggle" id="hamburger">
          <i class="fa fa-bars"></i>
        </span>
        <a href="./index.php" class="logo"> THE BURGER PLACE</a>
        <ul class="main-nav" id="js-menu">
          <li>
            <!-- using php to check if current page is active and use CSS to add effect in the active one -->
            <a href="index.php" class="<?= ($currentPage == 'index') ? 'nav-active nav-links':'nav-links'; ?>">Home</a>
          </li>
          <li>
            <a href="./menu.php" class="<?= ($currentPage == 'menu') ? 'nav-active nav-links':'nav-links'; ?>">Menu</a>
          </li>
          <li>
            <a href="./about.php" class="<?= ($currentPage == 'about') ? 'nav-active nav-links':'nav-links'; ?>">About Us</a>
          </li>
          <li>
            <a href="./FAQ.php" class="<?= ($currentPage == 'faq') ? 'nav-active nav-links':'nav-links'; ?>">FAQ</a>
          </li>
          <li>
            <a href="./contact.php" class="<?= ($currentPage == 'contact') ? 'nav-active nav-links':'nav-links'; ?>">Contact Us</a>
          </li>
        </ul>
      </nav>
      <!-- end of navbar -->
    </header>
    <!-- end of header -->