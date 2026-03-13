<?php
/* ============================================================
   contact.php — Contact Form Page
   Handles form submission and stores messages in MySQL.
   ============================================================ */
$pageTitle  = "Contact | Shreyansh Pandey";
$activePage = "contact";

/* ── Form Processing ─────────────────────────────────────── */
$success = '';      // Success message string
$error   = '';      // Error message string
$formData = ['name' => '', 'email' => '', 'message' => ''];  // Preserve form values

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /* 1. Include database connection */
    include 'includes/db.php';

    /* 2. Collect & sanitize inputs */
    $name    = trim(htmlspecialchars($_POST['name']    ?? ''));
    $email   = trim(htmlspecialchars($_POST['email']   ?? ''));
    $message = trim(htmlspecialchars($_POST['message'] ?? ''));

    /* Preserve for re-display if error */
    $formData = ['name' => $name, 'email' => $email, 'message' => $message];

    /* 3. Validate inputs */
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (strlen($name) < 2) {
        $errors[] = "Name must be at least 2 characters.";
    }

    if (empty($email)) {
        $errors[] = "Email address is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    if (empty($message)) {
        $errors[] = "Message cannot be empty.";
    } elseif (strlen($message) < 10) {
        $errors[] = "Message must be at least 10 characters.";
    }

    /* 4. If no errors, store in database */
    if (empty($errors)) {
        /*
         * Use a prepared statement to prevent SQL Injection.
         * The contacts table must exist (see setup.sql).
         */
        $stmt = $conn->prepare(
            "INSERT INTO contacts (name, email, message, submitted_at)
             VALUES (?, ?, ?, NOW())"
        );

        if ($stmt) {
            $stmt->bind_param('sss', $name, $email, $message);

            if ($stmt->execute()) {
                $success  = "Thank you, <strong>{$name}</strong>! Your message has been received. I'll get back to you soon.";
                $formData = ['name' => '', 'email' => '', 'message' => '']; // Reset form
            } else {
                $error = "Database error: " . $stmt->error . " — Please try again later.";
            }

            $stmt->close();
        } else {
            $error = "Prepared statement failed: " . $conn->error;
        }

        $conn->close();

    } else {
        /* Combine validation errors into one string */
        $error = implode('<br>', $errors);
    }
}

/* Now include header (must be after all PHP logic) */
include 'includes/header.php';
?>

<!-- ── Page Hero ── -->
<div class="page-hero">
    <div class="badge">Get In Touch</div>
    <h1>Contact <span class="highlight">Me</span></h1>
    <p class="subtitle">// Have a question or want to connect? Send me a message!</p>
</div>

<!-- ── Contact Section ── -->
<div class="section" style="padding-top:1.5rem;">
    <div class="contact-grid">

        <!-- ── Left: Contact Info ── -->
        <div>
            <div class="contact-info-card">
                <h3>📬 Contact Information</h3>

                <!-- Email -->
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <div>
                        <div class="contact-detail-label">Email</div>
                        <div class="contact-detail-val">
                            <a href="mailto:shreyanshpandey437@gmail.com">shreyanshpandey437@gmail.com</a>
                        </div>
                    </div>
                </div>

                <!-- Phone -->
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div>
                        <div class="contact-detail-label">Phone</div>
                        <div class="contact-detail-val">
                            <a href="tel:+919643842560">+91 9643842560</a>
                        </div>
                    </div>
                </div>

                <!-- College -->
                <div class="contact-item">
                    <div class="contact-icon">🏛️</div>
                    <div>
                        <div class="contact-detail-label">College</div>
                        <div class="contact-detail-val">IMED, Pune</div>
                    </div>
                </div>

                <!-- Location -->
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div>
                        <div class="contact-detail-label">Location</div>
                        <div class="contact-detail-val">Pune, Maharashtra, India</div>
                    </div>
                </div>

            </div><!-- /.contact-info-card -->

            <!-- Response time note -->
            <div style="margin-top:1.25rem;background:rgba(34,211,238,.06);border:1px solid rgba(34,211,238,.2);border-radius:var(--radius);padding:1.25rem;font-size:.85rem;color:var(--text-muted);line-height:1.6;">
                <strong style="color:var(--accent-cyan);">⏱ Response Time</strong><br>
                I typically respond to messages within 24–48 hours. Feel free to reach out about anything — internships, collaborations, or just to say hello!
            </div>

        </div><!-- /.left column -->

        <!-- ── Right: Contact Form ── -->
        <div class="contact-form-card">
            <h3>✉️ Send a Message</h3>

            <!-- Success Alert -->
            <?php if ($success): ?>
            <div class="alert alert-success">
                ✅ <?= $success ?>
            </div>
            <?php endif; ?>

            <!-- Error Alert -->
            <?php if ($error): ?>
            <div class="alert alert-error">
                ⚠️ <?= $error ?>
            </div>
            <?php endif; ?>

            <!-- The Contact Form -->
            <form method="POST" action="contact.php" novalidate>

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="e.g. Shreyansh Pandey"
                        value="<?= htmlspecialchars($formData['name']) ?>"
                        required
                    >
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="e.g. yourname@email.com"
                        value="<?= htmlspecialchars($formData['email']) ?>"
                        required
                    >
                </div>

                <!-- Message Field -->
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea
                        id="message"
                        name="message"
                        placeholder="Write your message here..."
                        required
                    ><?= htmlspecialchars($formData['message']) ?></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:.85rem;">
                    🚀 Send Message
                </button>

            </form>

        </div><!-- /.contact-form-card -->

    </div><!-- /.contact-grid -->
</div><!-- /.section -->

<?php include 'includes/footer.php'; ?>
