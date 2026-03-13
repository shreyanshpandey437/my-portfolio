<?php
/* ============================================================
   skills.php — Technical Skills Page
   ============================================================ */
$pageTitle  = "Skills | Shreyansh Pandey";
$activePage = "skills";
include 'includes/header.php';

/* ── Skills Data ──────────────────────────────────────────── */
/* Array of categories, each containing skills. */
$skillsData = [
    [
        'category' => 'Frontend Development',
        'icon'     => '🎨',
        'color'    => '#4f8ef7',
        'skills'   => [
            ['name' => 'JavaScript',     'icon' => '｡🇯‌🇸‌', 'desc' => 'Designing and Animations',      'level' => 'Advance'],
            ['name' => 'HTML5',     'icon' => '🌐', 'desc' => 'Structure & Semantics',      'level' => 'Advance'],
            ['name' => 'CSS3',      'icon' => '🎨', 'desc' => 'Styling & Responsive Design', 'level' => 'Intermediate'],
        ],
    ],
    [
        'category' => 'Programming Languages',
        'icon'     => '⚙️',
        'color'    => '#8b5cf6',
        'skills'   => [
            ['name' => 'C Programming', 'icon' => '⚙️', 'desc' => 'Procedural Programming & Basics', 'level' => 'Intermediate'],
            ['name' => 'Java',           'icon' => '☕', 'desc' => 'Object-Oriented Programming',    'level' => 'Intermediate'],
            ['name' => 'PHP',            'icon' => '🐘', 'desc' => 'Server-Side Web Development',    'level' => 'Intermediate'],
        ],
    ],
    [
        'category' => 'Database',
        'icon'     => '🗃️',
        'color'    => '#22d3ee',
        'skills'   => [
            ['name' => 'MySQL', 'icon' => '🗃️', 'desc' => 'Relational Databases & CRUD', 'level' => 'Learning'],
        ],
    ],
    [
        'category' => 'Core Concepts',
        'icon'     => '🧠',
        'color'    => '#f59e0b',
        'skills'   => [
            ['name' => 'Data Structures', 'icon' => '🌲', 'desc' => 'Arrays, Linked Lists, Stacks, Queues', 'level' => 'Learning'],
            ['name' => 'Algorithms',      'icon' => '🧮', 'desc' => 'Sorting, Searching, Complexity',      'level' => 'Learning'],
        ],
    ],
    [
        'category' => 'Tools & Environment',
        'icon'     => '🛠️',
        'color'    => '#10b981',
        'skills'   => [
            ['name' => 'XAMPP',   'icon' => '🛠️', 'desc' => 'Local PHP/MySQL Development Server', 'level' => 'Intermediate'],
            ['name' => 'VS Code', 'icon' => '📝', 'desc' => 'Code Editor',                        'level' => 'Intermediate'],
            ['name' => 'Git',     'icon' => '🌿', 'desc' => 'Version Control Basics',              'level' => 'Learning'],
        ],
    ],
];

/* Level badge colors */
$levelColors = [
    'Intermediate' => ['bg' => 'rgba(79,142,247,0.12)',  'border' => 'rgba(79,142,247,0.3)',  'text' => '#4f8ef7'],
    'Learning'     => ['bg' => 'rgba(245,158,11,0.12)',  'border' => 'rgba(245,158,11,0.3)',  'text' => '#f59e0b'],
    'Advanced'     => ['bg' => 'rgba(16,185,129,0.12)',  'border' => 'rgba(16,185,129,0.3)',  'text' => '#10b981'],
];
?>

<!-- ── Page Hero ── -->
<div class="page-hero">
    <div class="badge">Technical Profile</div>
    <h1>My <span class="highlight">Skills</span></h1>
    <p class="subtitle">// Technologies and tools I work with.</p>
</div>

<!-- ── Skills Section ── -->
<div class="section" style="padding-top:1.5rem;">

    <?php foreach ($skillsData as $group): ?>

    <!-- Category Block -->
    <div class="skills-category">
        <!-- Category Header -->
        <div style="display:flex;align-items:center;gap:.75rem;margin-bottom:1.5rem;">
            <span style="font-size:1.5rem;"><?= $group['icon'] ?></span>
            <h3 style="
                font-family:var(--font-mono);
                font-size:.82rem;
                color:<?= $group['color'] ?>;
                text-transform:uppercase;
                letter-spacing:.14em;
                padding-left:1rem;
                border-left:2px solid <?= $group['color'] ?>;
            "><?= htmlspecialchars($group['category']) ?></h3>
        </div>

        <!-- Skills Cards Grid -->
        <div class="skills-grid">
            <?php foreach ($group['skills'] as $skill):
                $lc    = $levelColors[$skill['level']] ?? $levelColors['Learning'];
            ?>
            <div class="skill-card">
                <span class="skill-icon"><?= $skill['icon'] ?></span>
                <div class="skill-name"><?= htmlspecialchars($skill['name']) ?></div>
                <div style="font-size:.82rem;color:var(--text-muted);margin-bottom:.85rem;line-height:1.4;">
                    <?= htmlspecialchars($skill['desc']) ?>
                </div>
                <!-- Level Badge -->
                <span style="
                    font-family:var(--font-mono);font-size:.68rem;
                    padding:.25rem .7rem;border-radius:99px;
                    background:<?= $lc['bg'] ?>;
                    border:1px solid <?= $lc['border'] ?>;
                    color:<?= $lc['text'] ?>;
                    letter-spacing:.08em;text-transform:uppercase;
                "><?= $skill['level'] ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div><!-- /.skills-category -->

    <?php endforeach; ?>

    <!-- ── Learning Goals Banner ── -->
    <div style="
        margin-top:3rem;
        background:linear-gradient(135deg,rgba(79,142,247,0.08),rgba(139,92,246,0.08));
        border:1px solid var(--border);
        border-radius:var(--radius-lg);
        padding:2.5rem;
        display:flex;align-items:center;gap:2rem;flex-wrap:wrap;
    ">
        <div style="font-size:3rem;">🚀</div>
        <div>
            <h3 style="font-size:1.15rem;margin-bottom:.5rem;color:var(--text-primary);">
                Always Learning & Growing
            </h3>
            <p style="color:var(--text-muted);font-size:.9rem;max-width:520px;line-height:1.7;">
                I'm constantly expanding my skill set. Currently focused on deepening my
                knowledge in <span style="color:var(--accent-blue)">PHP & MySQL</span>,
                <span style="color:var(--accent-purple)">Java OOP</span>, and
                <span style="color:var(--accent-cyan)">Data Structures & Algorithms</span>.
            </p>
        </div>
    </div>

</div><!-- /.section -->

<?php include 'includes/footer.php'; ?>
