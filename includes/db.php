<?php
/* ============================================================
   includes/db.php — Database Connection
   Configure MySQL credentials for XAMPP here.
   ============================================================ */

define('DB_HOST',   'localhost');   // XAMPP MySQL host
define('DB_USER',   'root');        // XAMPP default MySQL user
define('DB_PASS',   '');            // XAMPP default: empty password
define('DB_NAME',   'portfolio_db'); // Database name

/* Create a MySQLi connection */
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/* Check connection */
if ($conn->connect_error) {
    /*
     * NOTE: If you see this error, make sure:
     * 1. XAMPP MySQL service is running.
     * 2. You have created the database 'portfolio_db'
     *    by running the SQL in setup.sql (provided separately).
     */
    die('<div style="font-family:monospace;padding:2rem;color:#f87171;background:#1a0a0a;border:1px solid #f87171;border-radius:8px;margin:2rem;">
        <strong>Database Connection Failed:</strong><br>' . $conn->connect_error . '<br><br>
        <small>Ensure XAMPP MySQL is running and the database "portfolio_db" exists.</small>
    </div>');
}

/* Set character encoding to UTF-8 */
$conn->set_charset('utf8mb4');
?>
