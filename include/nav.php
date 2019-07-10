<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="#intro">Home</a></li>
          <li><a href="index.php" class="<?= ($activePage == 'index') ? 'active':''; ?>">Publish PoE</a></li>
          <li><a href="verify.php"  class="<?= ($activePage == 'verify') ? 'active':''; ?>">Verify PoE</a></li>
          <li><a href="latest.php"  class="<?= ($activePage == 'verify') ? 'active':''; ?>">Latest PoE</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#team">Team</a></li>         
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->