<?php
/* ============================================================
   experiments.php — PHP Practical Programs
   Code is fetched live from GitHub API using JavaScript.
   ============================================================ */
$pageTitle  = "PHP Experiments | Shreyansh Pandey";
$activePage = "experiments";
include 'includes/header.php';

$repoOwner = "shreyanshpandey437";
$repoName  = "98-BCA-6-Shreyansh-Pandey";
$branch    = "main";

$programs = [
    ['num'=>'Program 1',    'file'=>'program1.php',    'icon'=>'🚀', 'title'=>'Basic PHP Program',
     'problem'=>'Write a basic PHP program to display output on the browser using echo and print statements. Understand PHP tags and how to embed PHP inside HTML.',
     'concept'=>'PHP scripts start with <?php. The echo and print statements output text to the browser. PHP is a server-side scripting language running on Apache/XAMPP.',
     'outcome'=>'Understood PHP syntax, how to write and run a basic PHP script on a local server, and the difference between echo and print.'],

    ['num'=>'Program 2',    'file'=>'program2.php',    'icon'=>'📦', 'title'=>'Variables and Data Types',
     'problem'=>'Demonstrate PHP variables and data types — String, Integer, Float, Boolean, and NULL. Display values and types using var_dump() and gettype().',
     'concept'=>'PHP variables start with $. PHP is loosely typed. Data types include String, Integer, Float, Boolean, Array, Object, and NULL.',
     'outcome'=>'Learned how to declare variables, assign values of different types, and inspect them using built-in PHP functions.'],

    ['num'=>'Program 3',    'file'=>'program3.php',    'icon'=>'➕', 'title'=>'Operators in PHP',
     'problem'=>'Demonstrate Arithmetic (+,-,*,/,%), Comparison (==,!=,>,<), Logical (&&,||,!) and Assignment operators with practical examples.',
     'concept'=>'Arithmetic operators do math. Comparison operators return boolean. Logical operators combine conditions. Assignment operators modify variables in one step.',
     'outcome'=>'Understood how PHP operators work and how to use them in expressions and conditions.'],

    ['num'=>'Program 4',    'file'=>'program4.php',    'icon'=>'🔀', 'title'=>'Conditional Statements (if-else)',
     'problem'=>'Demonstrate if, if-else, and if-elseif-else. Accept a number and determine if it is positive, negative, or zero. Build a simple grade checker.',
     'concept'=>'if checks a condition; else handles the false case; elseif handles multiple conditions. Conditions evaluate to true or false.',
     'outcome'=>'Learned conditional logic in PHP and how to make decisions based on input values.'],

    ['num'=>'Program 5',    'file'=>'program5.php',    'icon'=>'🔁', 'title'=>'Loops in PHP',
     'problem'=>'Demonstrate for, while, and do-while loops. Print a multiplication table, reverse a number, and display a number series.',
     'concept'=>'for is used when iterations are known. while runs while a condition is true. do-while executes at least once before checking the condition.',
     'outcome'=>'Understood different loop structures and when to apply each for repetitive tasks.'],

    ['num'=>'Program 6',    'file'=>'program6.php',    'icon'=>'⚙️', 'title'=>'Functions in PHP',
     'problem'=>'Define and call user-defined functions. Create functions for factorial, prime number check, and sum of an array.',
     'concept'=>'Functions are defined with function keyword, accept parameters, and return values with return. They promote code reusability.',
     'outcome'=>'Learned how to define, call, and pass arguments to PHP functions and the importance of modular programming.'],

    ['num'=>'Program 7',    'file'=>'program7.php',    'icon'=>'📋', 'title'=>'Arrays in PHP',
     'problem'=>'Demonstrate indexed, associative, and multidimensional arrays. Perform sorting, searching, and iteration using built-in array functions.',
     'concept'=>'Indexed arrays use numeric keys. Associative arrays use string keys. PHP provides sort(), array_search(), count(), array_push() etc.',
     'outcome'=>'Gained knowledge of PHP array types and how to manipulate them using built-in functions.'],

    ['num'=>'Program 8',    'file'=>'program8.php',    'icon'=>'🔤', 'title'=>'String Functions in PHP',
     'problem'=>'Demonstrate common string functions: strlen(), strtoupper(), strtolower(), strrev(), str_replace(), substr(), strpos(), trim().',
     'concept'=>'PHP has a rich string function library. Strings concatenate with dot (.). Functions return a new result without modifying the original.',
     'outcome'=>'Learned to manipulate strings in PHP for input cleaning, formatting, and searching.'],

    ['num'=>'Program 9',    'file'=>'program9.php',    'icon'=>'📝', 'title'=>'Form Handling — GET and POST',
     'problem'=>'Create an HTML form that accepts name, age, and email. Process using both GET and POST methods and display the submitted data.',
     'concept'=>'$_GET retrieves data from URL (visible). $_POST retrieves from request body (hidden). POST is preferred for sensitive data.',
     'outcome'=>'Understood GET vs POST, how to build HTML forms, and how PHP captures and processes form data.'],

    ['num'=>'Program 10',   'file'=>'program10.php',   'icon'=>'📁', 'title'=>'File Handling in PHP',
     'problem'=>'Demonstrate file operations: create a file, write using fwrite(), read using fread(), append content, and delete using unlink().',
     'concept'=>'fopen() opens a file with modes (r,w,a). fwrite() writes, fread() reads, fclose() closes, unlink() deletes the file.',
     'outcome'=>'Learned file I/O in PHP and understood file modes and safe file handling practices.'],

    ['num'=>'Switch',       'file'=>'switch.php',      'icon'=>'🔄', 'title'=>'Switch Statement in PHP',
     'problem'=>'Use the switch statement to accept a day number (1–7) and display the day name. Build a menu-driven program using switch-case.',
     'concept'=>'switch evaluates an expression and runs the matching case block. Each case ends with break to prevent fall-through.',
     'outcome'=>'Understood when and how to use switch-case as a cleaner alternative to multiple if-else chains.'],

    ['num'=>'Calculator',   'file'=>'calculator.php',  'icon'=>'🧮', 'title'=>'PHP Web Calculator',
     'problem'=>'Build a web-based calculator using PHP and HTML forms. Accept two numbers and an operator (+,-,*,/), compute the result, and handle division by zero.',
     'concept'=>'HTML form collects two numbers and an operator via $_POST. PHP uses switch to select the operation and displays the result.',
     'outcome'=>'Combined HTML form design with PHP logic to build a real working application.'],

    ['num'=>'Form Marks',   'file'=>'formMarks.php',   'icon'=>'🎓', 'title'=>'Student Marks & Grade Calculator',
     'problem'=>'Accept a student name and marks for 5 subjects via a form. Calculate total, percentage, and assign a grade (A/B/C/D/F). Display a formatted result card.',
     'concept'=>'Marks received via $_POST. Total via loop or array_sum(). Percentage = (total/max)*100. if-elseif assigns grade. Results shown in HTML table.',
     'outcome'=>'Practiced form handling, calculations, conditional grading logic, and formatted HTML output together.'],

    ['num'=>'Chess Board',  'file'=>'make_chess.php',  'icon'=>'♟️', 'title'=>'Chess Board Pattern using PHP',
     'problem'=>'Generate an 8x8 chess board using nested loops and HTML tables. Alternate black and white cells based on row + column index.',
     'concept'=>'Nested for loops iterate 8x8. Cell color = (row+col) % 2. Even = white, Odd = black. Rendered with HTML table and inline CSS.',
     'outcome'=>'Learned how nested loops generate patterns and how to combine PHP with HTML for dynamic visual output.'],
];
?>

<!-- ── Page Hero ── -->
<div class="page-hero">
    <div class="badge">PHP Lab Programs</div>
    <h1>PHP <span class="highlight">Experiments</span></h1>
    <p class="subtitle">
        // <?= count($programs) ?> programs —
        <a href="https://github.com/<?= $repoOwner ?>/<?= $repoName ?>" target="_blank" style="color:var(--accent-blue);">&#128279; GitHub Repo</a>
    </p>
</div>

<div class="section" style="padding-top:1.5rem;">

    <!-- GitHub banner -->
    <div style="background:rgba(79,142,247,.07);border:1px solid var(--border);border-radius:var(--radius);padding:1rem 1.5rem;display:flex;align-items:center;gap:1rem;flex-wrap:wrap;margin-bottom:2.5rem;font-family:var(--font-mono);font-size:.82rem;color:var(--text-dim);">
        <span style="font-size:1.5rem;">🐙</span>
        <span>Code auto-loaded from:</span>
        <a href="https://github.com/<?= $repoOwner ?>/<?= $repoName ?>" target="_blank" style="color:var(--accent-blue);">
            github.com/<?= $repoOwner ?>/<?= $repoName ?>
        </a>
        <span style="margin-left:auto;font-size:.7rem;color:var(--text-muted);">⚡ Live via GitHub API</span>
    </div>

    <div class="exp-list">
    <?php foreach ($programs as $i => $p):
        $safeId = 'prog_' . preg_replace('/[^a-z0-9]/i', '_', $p['file']);
    ?>
    <div class="exp-card" id="<?= $safeId ?>">

        <!-- Header -->
        <div class="exp-header">
            <span class="exp-num"><?= htmlspecialchars($p['num']) ?></span>
            <span style="font-size:1.3rem;"><?= $p['icon'] ?></span>
            <h3><?= htmlspecialchars($p['title']) ?></h3>
            <a href="https://github.com/<?= $repoOwner ?>/<?= $repoName ?>/blob/<?= $branch ?>/<?= $p['file'] ?>"
               target="_blank"
               style="margin-left:auto;font-family:var(--font-mono);font-size:.72rem;color:var(--accent-cyan);
                      border:1px solid rgba(34,211,238,.25);background:rgba(34,211,238,.07);
                      padding:.25rem .75rem;border-radius:6px;white-space:nowrap;transition:all .3s;">
                🔗 <?= htmlspecialchars($p['file']) ?>
            </a>
        </div>

        <!-- Body -->
        <div class="exp-body">

            <!-- Problem & Concept -->
            <div class="exp-meta-grid">
                <div class="exp-meta-box">
                    <div class="exp-meta-label">📋 Problem Statement</div>
                    <p class="exp-meta-text"><?= htmlspecialchars($p['problem']) ?></p>
                </div>
                <div class="exp-meta-box">
                    <div class="exp-meta-label">💡 Concept Used</div>
                    <p class="exp-meta-text"><?= htmlspecialchars($p['concept']) ?></p>
                </div>
            </div>

            <!-- ── Live Code Block (fetched from GitHub API) ── -->
            <div style="margin-bottom:1.25rem;">
                <div style="display:flex;align-items:center;justify-content:space-between;
                            background:var(--bg-root);border:1px solid var(--border);
                            border-bottom:none;border-radius:var(--radius) var(--radius) 0 0;
                            padding:.6rem 1rem;">
                    <span style="font-family:var(--font-mono);font-size:.75rem;color:var(--accent-blue);">
                        💻 <?= htmlspecialchars($p['file']) ?>
                    </span>
                    <button onclick="copyCode('<?= $safeId ?>')"
                            style="font-family:var(--font-mono);font-size:.7rem;color:var(--text-muted);
                                   background:rgba(79,142,247,.1);border:1px solid var(--border);
                                   border-radius:5px;padding:.2rem .65rem;cursor:pointer;transition:all .3s;"
                            onmouseover="this.style.color='var(--accent-blue)'"
                            onmouseout="this.style.color='var(--text-muted)'">
                        📋 Copy
                    </button>
                </div>
                <pre id="pre_<?= $safeId ?>" style="
                    background:var(--bg-root);
                    border:1px solid var(--border);
                    border-radius:0 0 var(--radius) var(--radius);
                    padding:1.25rem;
                    overflow-x:auto;
                    margin:0;
                    font-family:var(--font-mono);
                    font-size:.8rem;
                    line-height:1.65;
                    color:var(--text-dim);
                    min-height:80px;
                    position:relative;
                "><code id="code_<?= $safeId ?>" data-file="<?= htmlspecialchars($p['file']) ?>">
                    <span style="color:var(--text-muted);font-style:italic;">⏳ Loading code from GitHub...</span>
                </code></pre>
            </div>

            <!-- Screenshot Placeholder -->
            <div class="screenshot-placeholder">
                <span>🖼️</span>
                <strong>Output / Screenshot</strong>
                <span style="font-size:.75rem;margin-top:.3rem;">
                    Place image in /images/ folder:<br>
                    &lt;img src="images/<?= str_replace('.php','',$p['file']) ?>.png" alt="Output"&gt;
                </span>
            </div>

            <!-- Learning Outcome -->
            <div class="outcome-box">
                <span class="outcome-icon">✅</span>
                <div>
                    <div style="font-family:var(--font-mono);font-size:.7rem;color:var(--accent-cyan);
                                text-transform:uppercase;letter-spacing:.1em;margin-bottom:.3rem;">
                        Learning Outcome
                    </div>
                    <p class="outcome-text"><?= htmlspecialchars($p['outcome']) ?></p>
                </div>
            </div>

        </div><!-- /.exp-body -->
    </div><!-- /.exp-card -->
    <?php endforeach; ?>
    </div><!-- /.exp-list -->
</div><!-- /.section -->

<!-- ============================================================
     JavaScript: Fetch code from GitHub API & syntax highlight
     ============================================================ -->
<script>
/* GitHub repo details (must match PHP variables above) */
const REPO_OWNER = "<?= $repoOwner ?>";
const REPO_NAME  = "<?= $repoName ?>";
const BRANCH     = "<?= $branch ?>";

/* ── Fetch all code blocks ── */
document.querySelectorAll('code[data-file]').forEach(async (codeEl) => {
    const file   = codeEl.getAttribute('data-file');
    const safeId = codeEl.id.replace('code_', '');

    try {
        /* GitHub Contents API — returns base64-encoded file content */
        const apiUrl = `https://api.github.com/repos/${REPO_OWNER}/${REPO_NAME}/contents/${file}?ref=${BRANCH}`;
        const res    = await fetch(apiUrl, {
            headers: { 'Accept': 'application/vnd.github.v3+json' }
        });

        if (!res.ok) throw new Error(`HTTP ${res.status}`);

        const data    = await res.json();
        /* GitHub API returns content as base64 with newlines — decode it */
        const decoded = atob(data.content.replace(/\n/g, ''));

        /* Escape HTML special chars so the code displays safely */
        const escaped = decoded
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;');

        /* Basic PHP syntax highlighting with regex */
        const highlighted = phpHighlight(escaped);

        codeEl.innerHTML = highlighted;

    } catch (err) {
        codeEl.innerHTML = `<span style="color:#f87171;">⚠️ Could not load code: ${err.message}<br>
        <a href="https://github.com/${REPO_OWNER}/${REPO_NAME}/blob/${BRANCH}/${file}"
           target="_blank" style="color:var(--accent-blue);">View on GitHub ↗</a></span>`;
    }
});

/* ── Lightweight PHP syntax highlighter ── */
function phpHighlight(code) {
    /* Keywords */
    const keywords = ['echo','print','if','else','elseif','while','for','foreach','do',
        'switch','case','break','continue','return','function','class','new','array',
        'true','false','null','include','require','isset','empty','unset','die','exit',
        'public','private','protected','static','extends','implements','use','namespace'];

    /* Strings (single and double quoted) */
    code = code.replace(/(&#39;[^&#39;]*&#39;|&quot;[^&quot;]*&quot;)/g,
        '<span style="color:#86efac;">$1</span>');

    /* PHP tags */
    code = code.replace(/(&lt;\?php|&lt;\?=|\?&gt;)/g,
        '<span style="color:#f472b6;font-weight:600;">$1</span>');

    /* Variables */
    code = code.replace(/(\$[a-zA-Z_][a-zA-Z0-9_]*)/g,
        '<span style="color:#67e8f9;">$1</span>');

    /* Keywords */
    const kwRegex = new RegExp(`\\b(${keywords.join('|')})\\b`, 'g');
    code = code.replace(kwRegex, '<span style="color:#c084fc;font-weight:600;">$1</span>');

    /* Comments */
    code = code.replace(/(\/\/[^\n]*|#[^\n]*)/g,
        '<span style="color:#6b7280;font-style:italic;">$1</span>');

    /* Functions (word followed by open paren) */
    code = code.replace(/\b([a-zA-Z_][a-zA-Z0-9_]*)(?=\s*\()/g,
        '<span style="color:#fbbf24;">$1</span>');

    /* Numbers */
    code = code.replace(/\b(\d+)\b/g,
        '<span style="color:#fb923c;">$1</span>');

    return code;
}

/* ── Copy to clipboard ── */
function copyCode(safeId) {
    const codeEl = document.getElementById('code_' + safeId);
    const text   = codeEl.innerText;
    navigator.clipboard.writeText(text).then(() => {
        /* Flash feedback on the button */
        const btn = codeEl.closest('.exp-card').querySelector('button[onclick]');
        if (btn) {
            const orig = btn.innerHTML;
            btn.innerHTML = '✅ Copied!';
            btn.style.color = '#4ade80';
            setTimeout(() => { btn.innerHTML = orig; btn.style.color = ''; }, 2000);
        }
    }).catch(() => alert('Copy failed — please select and copy manually.'));
}
</script>

<?php include 'includes/footer.php'; ?>
