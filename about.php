<?php
/* ============================================================
   about.php — About Me Page
   ============================================================ */
$pageTitle  = "About | Shreyansh Pandey";
$activePage = "about";
include 'includes/header.php';
?>

<!-- ── Page Hero ── -->
<div class="page-hero">
    <div class="badge">My Story</div>
    <h1>About <span class="highlight">Me</span></h1>
    <p class="subtitle">// A little bit about who I am and what drives me.</p>
</div>

<!-- ── About Section ── -->
<div class="section" style="padding-top:1.5rem;">
    <div class="about-grid">

        <!-- Left: Photo -->
        <div class="about-photo-box">
            <div class="about-photo-placeholder">
                <span class="icon-big">👤</span>
                <span>Your Photo Here</span>
                <span style="font-size:.68rem;opacity:.6;">Replace with your image in /images/</span>
            </div>
            <!--
                To add your photo, uncomment below and place your image in /images/
                <img src="images/profile.jpg" alt="Shreyansh Pandey" style="border-radius:var(--radius-lg);width:100%;">
            -->
        </div>

        <!-- Right: Info -->
        <div class="about-info">

            <p class="about-intro">
                Hi! I'm <strong style="color:var(--accent-blue)">Shreyansh Pandey</strong>, a dedicated
                BCA (Bachelor of Computer Applications) student at the
                <strong style="color:var(--text-primary)">Institute of Management and Entrepreneurship
                Development (IMED), Pune</strong>. I'm passionate about technology and fascinated by
                how software can solve real-world problems.
            </p>

            <p class="about-intro">
                My journey into computer science has been driven by a deep curiosity about
                <strong style="color:var(--text-primary)">web development</strong> — from crafting
                clean, responsive frontends to designing efficient backend systems. I enjoy
                experimenting with new tools and frameworks, and I'm currently strengthening my
                foundation in PHP, MySQL, and server-side programming.
            </p>

            <p class="about-intro">
                Beyond academics, I am interested in learning
                <strong style="color:var(--text-primary)">software engineering principles</strong>
                and backend development, with a goal to build scalable, user-friendly applications.
                I believe in writing clean code, continuous learning, and collaborative growth.
            </p>

            <!-- Info Grid -->
            <div class="info-grid">

                <div class="info-item">
                    <div class="info-label">Full Name</div>
                    <div class="info-value">Shreyansh Pandey</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Course</div>
                    <div class="info-value">BCA — Bachelor of Computer Applications</div>
                </div>

                <div class="info-item">
                    <div class="info-label">College</div>
                    <div class="info-value">IMED, Pune</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Email</div>
                    <div class="info-value" style="font-size:.82rem;">shreyanshpandey437@gmail.com</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Phone</div>
                    <div class="info-value">+91 9643842560</div>
                </div>

                <div class="info-item">
                    <div class="info-label">Location</div>
                    <div class="info-value">Pune, Maharashtra, India</div>
                </div>

            </div><!-- /.info-grid -->

            <!-- CTA -->
            <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                <a href="resume.php"  class="btn btn-primary">&#128196; View Resume</a>
                <a href="contact.php" class="btn btn-outline">&#9993; Contact Me</a>
            </div>

        </div><!-- /.about-info -->
    </div><!-- /.about-grid -->

    <hr class="divider">

    <!-- Languages & Interests Row -->
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;" class="about-extra-grid">

        <!-- Languages -->
        <div>
            <div class="section-label" style="margin-bottom:1.2rem;">Languages I Speak</div>
            <div style="display:flex;flex-direction:column;gap:.75rem;">
                <?php
                $languages = [
                    ['name' => 'English', 'level' => 'Professional', 'pct' => 85],
                    ['name' => 'Hindi',   'level' => 'Native',       'pct' => 100],
                ];
                foreach ($languages as $lang):
                ?>
                <div class="card" style="padding:1.25rem;">
                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:.75rem;">
                        <span style="font-weight:600;color:var(--text-primary);"><?= $lang['name'] ?></span>
                        <span style="font-family:var(--font-mono);font-size:.72rem;color:var(--accent-blue);"><?= $lang['level'] ?></span>
                    </div>
                    <div style="height:4px;background:var(--bg-surface);border-radius:2px;overflow:hidden;">
                        <div style="height:100%;width:<?= $lang['pct'] ?>%;background:linear-gradient(90deg,var(--accent-blue),var(--accent-cyan));border-radius:2px;transition:width 1s ease;"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Interests -->
        <div>
            <div class="section-label" style="margin-bottom:1.2rem;">Interests & Hobbies</div>
            <div style="display:flex;flex-wrap:wrap;gap:.75rem;">
                <?php
                $interests = [
                    ['icon' => '✈️', 'label' => 'Travelling'],
                    ['icon' => '💻', 'label' => 'Technology'],
                    ['icon' => '🌐', 'label' => 'Web Dev'],
                    ['icon' => '📚', 'label' => 'Learning'],
                    ['icon' => '🧩', 'label' => 'Problem Solving'],
                ];
                foreach ($interests as $interest):
                ?>
                <div class="card" style="padding:.9rem 1.25rem;display:inline-flex;align-items:center;gap:.6rem;cursor:default;">
                    <span style="font-size:1.3rem;"><?= $interest['icon'] ?></span>
                    <span style="font-size:.9rem;font-weight:500;"><?= $interest['label'] ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div><!-- /.about-extra-grid -->

</div><!-- /.section -->

<style>
/* Stack columns on mobile */
@media(max-width:600px) {
    .about-extra-grid { grid-template-columns: 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>
