<?php
/* ============================================================
   index.php — Home Page (Hero)
   ============================================================ */
$pageTitle  = "Shreyansh Pandey | BCA Student Portfolio";
$activePage = "home";
include 'includes/header.php';
?>

<!-- ── Hero Section ── -->
<section class="hero">
    <div class="hero-content">

        <!-- Online status badge -->
        <div class="status-badge">
            <span class="status-dot"></span>
            Available for opportunities
        </div>

        <!-- Pre-heading -->
        <div class="hero-pre">Hello, World! I'm</div>

        <!-- Name -->
        <h1>Shreyansh<br>Pandey</h1>

        <!-- Tagline -->
        <p class="hero-tagline">
            &gt; Aspiring Web Developer | BCA Student | Technology Enthusiast
        </p>

        <!-- Short intro -->
        <p class="hero-desc">
            A passionate BCA student at <strong style="color:var(--text-primary)">IMED Pune</strong>,
            exploring the world of web development and software engineering.
            I love building things for the web and solving real-world problems through code.
        </p>

        <!-- CTA Buttons -->
        <div class="hero-cta">
            <a href="about.php"   class="btn btn-primary">&#128100; About Me</a>
            <a href="contact.php" class="btn btn-outline">&#9993; Get In Touch</a>
            <a href="resume.php"  class="btn btn-outline">&#128196; Resume</a>
        </div>

    </div><!-- /.hero-content -->
</section>

<!-- ── Quick Info Cards ── -->
<div class="section" style="padding-top:0;">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1.25rem;">

        <!-- Card: Course -->
        <div class="card" style="text-align:center;">
            <div style="font-size:2rem;margin-bottom:.75rem;">🎓</div>
            <div style="font-family:var(--font-mono);font-size:.7rem;color:var(--accent-blue);letter-spacing:.1em;text-transform:uppercase;margin-bottom:.4rem;">Course</div>
            <div style="font-weight:700;color:var(--text-primary);font-size:.95rem;">BCA</div>
            <div style="font-size:.82rem;color:var(--text-muted);">Bachelor of Computer Applications</div>
        </div>

        <!-- Card: College -->
        <div class="card" style="text-align:center;">
            <div style="font-size:2rem;margin-bottom:.75rem;">🏛️</div>
            <div style="font-family:var(--font-mono);font-size:.7rem;color:var(--accent-blue);letter-spacing:.1em;text-transform:uppercase;margin-bottom:.4rem;">College</div>
            <div style="font-weight:700;color:var(--text-primary);font-size:.95rem;">IMED Pune</div>
            <div style="font-size:.82rem;color:var(--text-muted);">Institute of Management &amp; Entrepreneurship Development</div>
        </div>

        <!-- Card: Focus -->
        <div class="card" style="text-align:center;">
            <div style="font-size:2rem;margin-bottom:.75rem;">💻</div>
            <div style="font-family:var(--font-mono);font-size:.7rem;color:var(--accent-blue);letter-spacing:.1em;text-transform:uppercase;margin-bottom:.4rem;">Focus</div>
            <div style="font-weight:700;color:var(--text-primary);font-size:.95rem;">Web Development</div>
            <div style="font-size:.82rem;color:var(--text-muted);">Frontend &amp; Backend Engineering</div>
        </div>

        <!-- Card: Location -->
        <div class="card" style="text-align:center;">
            <div style="font-size:2rem;margin-bottom:.75rem;">📍</div>
            <div style="font-family:var(--font-mono);font-size:.7rem;color:var(--accent-blue);letter-spacing:.1em;text-transform:uppercase;margin-bottom:.4rem;">Location</div>
            <div style="font-weight:700;color:var(--text-primary);font-size:.95rem;">Pune, India</div>
            <div style="font-size:.82rem;color:var(--text-muted);">Maharashtra, India</div>
        </div>

    </div>
</div>

<!-- ── Skills Snapshot ── -->
<div class="section" style="padding-top:1rem;padding-bottom:4rem;">
    <div class="section-header">
        <div class="section-label">Technical Profile</div>
        <h2 class="section-title">Core <span>Skills</span></h2>
    </div>

    <div style="display:flex;flex-wrap:wrap;gap:.75rem;">
        <?php
        /* Array of skill name => emoji icon */
        $skills = [
            'HTML'           => '🌐',
            'CSS'            => '🎨',
            'C Programming'  => '⚙️',
            'Java'           => '☕',
            'PHP'            => '🐘',
            'MySQL'          => '🗃️',
            'DSA'            => '🧠',
        ];
        foreach ($skills as $name => $icon):
        ?>
        <div style="
            display:inline-flex;align-items:center;gap:.5rem;
            background:var(--bg-card);border:1px solid var(--border);
            border-radius:99px;padding:.45rem 1.1rem;
            font-family:var(--font-mono);font-size:.8rem;
            color:var(--text-dim);transition:all .3s ease;
        "
        onmouseover="this.style.borderColor='var(--border-hover)';this.style.color='var(--accent-blue)'"
        onmouseout="this.style.borderColor='var(--border)';this.style.color='var(--text-dim)'"
        >
            <span><?= $icon ?></span> <?= htmlspecialchars($name) ?>
        </div>
        <?php endforeach; ?>
    </div>

    <div style="margin-top:2rem;">
        <a href="skills.php" class="btn btn-outline">View All Skills &rarr;</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
