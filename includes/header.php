<?php
/* ============================================================
   includes/header.php — Shared Navigation Header
   Include at the top of every page.
   Usage: <?php include 'includes/header.php'; ?>
   Set $pageTitle and $activePage before including.
   ============================================================ */

/* Default title fallback */
$pageTitle  = isset($pageTitle)  ? $pageTitle  : "Shreyansh Pandey | Portfolio";
$activePage = isset($activePage) ? $activePage : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Favicon emoji shortcut -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💻</text></svg>">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Meta for SEO -->
    <meta name="description" content="e-Portfolio of Shreyansh Pandey — BCA Student at IMED Pune. Aspiring web developer passionate about technology.">
    <meta name="author" content="Shreyansh Pandey">
</head>
<body>

<!-- ── Navigation Bar ── -->
<nav class="navbar">
    <!-- Logo / Name -->
    <a href="index.php" class="nav-logo">
        <span>&lt;</span>SP<span>/&gt;</span>
    </a>

    <!-- Hamburger for mobile -->
    <button class="hamburger" id="hamburger" aria-label="Toggle menu">
        <span></span><span></span><span></span>
    </button>

    <!-- Nav Links -->
    <ul class="nav-links" id="nav-links">
        <li><a href="index.php"        class="<?= $activePage==='home'        ? 'active' : '' ?>">Home</a></li>
        <li><a href="about.php"        class="<?= $activePage==='about'       ? 'active' : '' ?>">About</a></li>
        <li><a href="skills.php"       class="<?= $activePage==='skills'      ? 'active' : '' ?>">Skills</a></li>
        <li><a href="experiments.php"  class="<?= $activePage==='experiments' ? 'active' : '' ?>">Experiments</a></li>
        <li><a href="mini_project.php" class="<?= $activePage==='project'     ? 'active' : '' ?>">Project</a></li>
        <li><a href="resume.php"       class="<?= $activePage==='resume'      ? 'active' : '' ?>">Resume</a></li>
        <li><a href="contact.php"      class="<?= $activePage==='contact'     ? 'active' : '' ?>">Contact</a></li>
    </ul>
</nav>

<!-- Mobile menu toggle script -->
<script>
    const btn  = document.getElementById('hamburger');
    const menu = document.getElementById('nav-links');
    btn.addEventListener('click', () => menu.classList.toggle('open'));
</script>

<!-- Main page wrapper starts -->
<div class="page-wrapper">
