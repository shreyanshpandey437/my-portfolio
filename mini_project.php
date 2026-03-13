<?php
/* ============================================================
   mini_project.php — Mini Project Page
   ============================================================ */
$pageTitle  = "Mini Project | Shreyansh Pandey";
$activePage = "project";
include 'includes/header.php';
?>

<!-- ── Page Hero ── -->
<div class="page-hero">
    <div class="badge">Academic Project</div>
    <h1>Mini <span class="highlight">Project</span></h1>
    <p class="subtitle">// BCA semester mini project — details to be added soon.</p>
</div>

<!-- ── Section ── -->
<div class="section" style="padding-top:1.5rem;">

    <!-- Banner -->
    <div class="project-banner">
        <div style="font-size:3.5rem;margin-bottom:1rem;">🚧</div>
        <h2>Mini Project</h2>
        <p style="margin-top:.5rem;">Project details will be filled in as work progresses.</p>
        <div style="
            display:inline-flex;align-items:center;gap:.5rem;margin-top:1.25rem;
            padding:.4rem 1rem;border-radius:99px;
            background:rgba(245,158,11,0.1);border:1px solid rgba(245,158,11,0.3);
            font-family:var(--font-mono);font-size:.75rem;color:#f59e0b;
        ">
            🔄 Status: In Progress / Placeholder
        </div>
    </div>

    <!-- Placeholder Grid: 4 sections -->
    <div class="project-placeholder-grid">

        <!-- Problem Statement -->
        <div class="proj-ph-card">
            <span class="proj-ph-icon">📋</span>
            <div class="proj-ph-title">Problem Statement</div>
            <div class="proj-ph-note">// To be filled — describe the real-world problem your project solves.</div>
        </div>

        <!-- Modules -->
        <div class="proj-ph-card">
            <span class="proj-ph-icon">🧩</span>
            <div class="proj-ph-title">Modules</div>
            <div class="proj-ph-note">// List all functional modules of the project (e.g., Login, Dashboard, Admin).</div>
        </div>

        <!-- Database Design -->
        <div class="proj-ph-card">
            <span class="proj-ph-icon">🗃️</span>
            <div class="proj-ph-title">Database Design</div>
            <div class="proj-ph-note">// Add your ER diagram or table structure here.</div>
        </div>

        <!-- Screenshots -->
        <div class="proj-ph-card">
            <span class="proj-ph-icon">🖼️</span>
            <div class="proj-ph-title">Screenshots</div>
            <div class="proj-ph-note">// Upload project screenshots to /images/ and display them here.</div>
        </div>

    </div><!-- /.project-placeholder-grid -->

    <!-- Optional: Detailed Placeholder Sections -->
    <div style="margin-top:2.5rem;display:flex;flex-direction:column;gap:1.5rem;">

        <!-- Problem Statement Detail Placeholder -->
        <div class="card">
            <div style="display:flex;align-items:center;gap:.75rem;margin-bottom:1rem;">
                <span style="font-size:1.5rem;">📋</span>
                <h3 style="font-size:1rem;color:var(--text-primary);">Problem Statement</h3>
                <span style="font-family:var(--font-mono);font-size:.68rem;color:#f59e0b;background:rgba(245,158,11,.1);border:1px solid rgba(245,158,11,.25);padding:.2rem .6rem;border-radius:4px;margin-left:auto;">PLACEHOLDER</span>
            </div>
            <div style="background:var(--bg-surface);border:1px dashed var(--border);border-radius:var(--radius);padding:2rem;text-align:center;color:var(--text-muted);font-family:var(--font-mono);font-size:.82rem;min-height:100px;display:flex;align-items:center;justify-content:center;">
                Write your project's problem statement here.<br>Explain the issue and how your project addresses it.
            </div>
        </div>

        <!-- Modules Detail Placeholder -->
        <div class="card">
            <div style="display:flex;align-items:center;gap:.75rem;margin-bottom:1rem;">
                <span style="font-size:1.5rem;">🧩</span>
                <h3 style="font-size:1rem;color:var(--text-primary);">Project Modules</h3>
                <span style="font-family:var(--font-mono);font-size:.68rem;color:#f59e0b;background:rgba(245,158,11,.1);border:1px solid rgba(245,158,11,.25);padding:.2rem .6rem;border-radius:4px;margin-left:auto;">PLACEHOLDER</span>
            </div>
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(160px,1fr));gap:1rem;">
                <?php
                /* Module placeholders — replace with actual modules */
                $modules = [
                    ['icon' => '🔐', 'name' => 'Module 1'],
                    ['icon' => '🏠', 'name' => 'Module 2'],
                    ['icon' => '👥', 'name' => 'Module 3'],
                    ['icon' => '⚙️', 'name' => 'Module 4'],
                ];
                foreach ($modules as $mod):
                ?>
                <div style="background:var(--bg-surface);border:1px dashed var(--border);border-radius:var(--radius);padding:1.25rem;text-align:center;">
                    <div style="font-size:1.75rem;margin-bottom:.5rem;"><?= $mod['icon'] ?></div>
                    <div style="font-family:var(--font-mono);font-size:.78rem;color:var(--text-muted);"><?= $mod['name'] ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Database Design Placeholder -->
        <div class="card">
            <div style="display:flex;align-items:center;gap:.75rem;margin-bottom:1rem;">
                <span style="font-size:1.5rem;">🗃️</span>
                <h3 style="font-size:1rem;color:var(--text-primary);">Database Design</h3>
                <span style="font-family:var(--font-mono);font-size:.68rem;color:#f59e0b;background:rgba(245,158,11,.1);border:1px solid rgba(245,158,11,.25);padding:.2rem .6rem;border-radius:4px;margin-left:auto;">PLACEHOLDER</span>
            </div>
            <div style="background:var(--bg-surface);border:1px dashed var(--border);border-radius:var(--radius);padding:2rem;text-align:center;color:var(--text-muted);font-family:var(--font-mono);font-size:.82rem;min-height:150px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:.75rem;">
                <span style="font-size:2.5rem;">🖼️</span>
                Add your ER Diagram or Database Table structure here.<br>
                Place image in /images/db_design.png and use &lt;img src="images/db_design.png"&gt;
            </div>
        </div>

        <!-- Screenshots Placeholder -->
        <div class="card">
            <div style="display:flex;align-items:center;gap:.75rem;margin-bottom:1rem;">
                <span style="font-size:1.5rem;">🖼️</span>
                <h3 style="font-size:1rem;color:var(--text-primary);">Project Screenshots</h3>
                <span style="font-family:var(--font-mono);font-size:.68rem;color:#f59e0b;background:rgba(245,158,11,.1);border:1px solid rgba(245,158,11,.25);padding:.2rem .6rem;border-radius:4px;margin-left:auto;">PLACEHOLDER</span>
            </div>
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:1rem;">
                <?php for ($s = 1; $s <= 4; $s++): ?>
                <div style="background:var(--bg-surface);border:1px dashed rgba(139,92,246,.3);border-radius:var(--radius);aspect-ratio:16/9;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:.5rem;font-family:var(--font-mono);font-size:.75rem;color:var(--text-muted);">
                    <span style="font-size:2rem;opacity:.4;">🖼️</span>
                    Screenshot <?= $s ?>
                </div>
                <?php endfor; ?>
            </div>
        </div>

    </div><!-- /.detail sections -->

</div><!-- /.section -->

<?php include 'includes/footer.php'; ?>
