<?php
/* ============================================================
   resume.php — Resume Page
   To embed your PDF: upload resume.pdf to /images/ folder
   and uncomment the <embed> section below.
   ============================================================ */
$pageTitle  = "Resume | Shreyansh Pandey";
$activePage = "resume";
include 'includes/header.php';

/* Check if a resume PDF exists in the images folder */
$resumePath   = 'images/resume.pdf';
$resumeExists = file_exists($resumePath);
?>

<!-- ── Page Hero ── -->
<div class="page-hero">
    <div class="badge">My Resume</div>
    <h1>Curriculum <span class="highlight">Vitae</span></h1>
    <p class="subtitle">// Download or view my academic and technical resume.</p>
</div>

<!-- ── Resume Section ── -->
<div class="section" style="padding-top:1.5rem;">

    <!-- Action Buttons -->
    <div class="resume-actions">
        <?php if ($resumeExists): ?>
            <!-- Download Button — visible only if resume.pdf exists -->
            <a href="<?= $resumePath ?>" download="Shreyansh_Pandey_Resume.pdf" class="btn btn-primary">
                📥 Download Resume
            </a>
            <a href="<?= $resumePath ?>" target="_blank" class="btn btn-outline">
                🔗 Open in New Tab
            </a>
        <?php else: ?>
            <!-- Placeholder buttons when no PDF is uploaded yet -->
            <span class="btn btn-primary" style="opacity:.5;cursor:not-allowed;" title="Upload resume.pdf to /images/ first">
                📥 Download Resume
            </span>
            <span class="btn btn-outline" style="opacity:.5;cursor:not-allowed;" title="Upload resume.pdf to /images/ first">
                🔗 Open in New Tab
            </span>
        <?php endif; ?>
    </div>

    <!-- PDF Embed Box -->
    <div class="resume-embed-box">

        <?php if ($resumeExists): ?>
            <!-- ── Actual PDF embed (shown when resume.pdf is in /images/) ── -->
            <embed
                src="<?= $resumePath ?>"
                type="application/pdf"
                width="100%"
                height="800px"
                style="display:block;"
            />
        <?php else: ?>
            <!-- ── Placeholder (shown until you upload your resume) ── -->
            <div class="resume-embed-placeholder">
                <span class="big-icon">📄</span>
                <h3>Resume Not Uploaded Yet</h3>
                <p>
                    To display your resume here:<br>
                    1. Export your CV as a PDF file.<br>
                    2. Rename it <strong style="color:var(--accent-blue);">resume.pdf</strong>.<br>
                    3. Place it in the <strong style="color:var(--accent-blue);">/images/</strong> folder.<br>
                    4. Refresh this page — it will appear automatically!
                </p>
                <div style="margin-top:1rem;display:flex;gap:.75rem;flex-wrap:wrap;justify-content:center;">
                    <div style="font-family:var(--font-mono);font-size:.75rem;color:var(--accent-blue);background:rgba(79,142,247,.1);border:1px solid rgba(79,142,247,.25);padding:.4rem .9rem;border-radius:6px;">
                        📁 /images/resume.pdf
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div><!-- /.resume-embed-box -->

    <!-- Resume Highlights Section -->
    <hr class="divider">

    <div class="section-header" style="margin-top:2rem;">
        <div class="section-label">At A Glance</div>
        <h2 class="section-title">Resume <span>Highlights</span></h2>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.5rem;">

        <!-- Education -->
        <div class="card">
            <div style="font-size:1.75rem;margin-bottom:1rem;">🎓</div>
            <h4 style="font-size:1rem;margin-bottom:.4rem;color:var(--text-primary);">Education</h4>
            <div style="font-family:var(--font-mono);font-size:.7rem;color:var(--accent-blue);text-transform:uppercase;letter-spacing:.1em;margin-bottom:.6rem;">Current</div>
            <p style="font-size:.9rem;color:var(--text-dim);line-height:1.6;">
                <strong style="color:var(--text-primary)">BCA — Bachelor of Computer Applications</strong><br>
                Institute of Management &amp; Entrepreneurship Development, Pune
            </p>
        </div>

        <!-- Skills Summary -->
        <div class="card">
            <div style="font-size:1.75rem;margin-bottom:1rem;">💻</div>
            <h4 style="font-size:1rem;margin-bottom:.4rem;color:var(--text-primary);">Technical Skills</h4>
            <div style="font-family:var(--font-mono);font-size:.7rem;color:var(--accent-blue);text-transform:uppercase;letter-spacing:.1em;margin-bottom:.6rem;">Key Technologies</div>
            <div style="display:flex;flex-wrap:wrap;gap:.4rem;">
                <?php
                $tags = ['HTML', 'CSS', 'PHP', 'MySQL', 'C', 'Java', 'DSA'];
                foreach ($tags as $tag):
                ?>
                <span style="font-family:var(--font-mono);font-size:.7rem;background:rgba(79,142,247,.1);border:1px solid rgba(79,142,247,.2);color:var(--accent-blue);padding:.2rem .6rem;border-radius:4px;">
                    <?= htmlspecialchars($tag) ?>
                </span>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="card">
            <div style="font-size:1.75rem;margin-bottom:1rem;">📬</div>
            <h4 style="font-size:1rem;margin-bottom:.4rem;color:var(--text-primary);">Contact</h4>
            <div style="font-family:var(--font-mono);font-size:.7rem;color:var(--accent-blue);text-transform:uppercase;letter-spacing:.1em;margin-bottom:.6rem;">Get In Touch</div>
            <p style="font-size:.85rem;color:var(--text-dim);line-height:1.8;">
                📧 shreyanshpandey437@gmail.com<br>
                📞 +91 9643842560<br>
                📍 Pune, Maharashtra, India
            </p>
        </div>

    </div>

</div><!-- /.section -->

<?php include 'includes/footer.php'; ?>
