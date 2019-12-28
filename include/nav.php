<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<nav class="main-nav float-right d-none d-lg-block">
    <ul>
        <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
        <li><a href="index.php#upload" class="<?= ($activePage == 'index') ? 'active':''; ?>">Publish Document</a></li>
        <li><a href="verify.php#upload" class="<?= ($activePage == 'verify') ? 'active':''; ?>">Verify Document</a></li>
        <li><a href="latest.php#upload" class="<?= ($activePage == 'verify') ? 'active':''; ?>">Latest Publications</a>
        </li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>
</nav><!-- .main-nav -->