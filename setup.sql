-- ============================================================
-- setup.sql — Database Setup for Shreyansh Pandey's Portfolio
-- ============================================================
-- HOW TO USE:
--   1. Open XAMPP and start Apache + MySQL.
--   2. Open phpMyAdmin: http://localhost/phpmyadmin
--   3. Click "SQL" tab in the top menu.
--   4. Paste ALL the code below and click "Go".
--   (OR) Use the Import tab to import this file directly.
-- ============================================================

-- Step 1: Create the database (if it doesn't already exist)
CREATE DATABASE IF NOT EXISTS portfolio_db
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

-- Step 2: Select the database
USE portfolio_db;

-- Step 3: Create the 'contacts' table to store contact form submissions
CREATE TABLE IF NOT EXISTS contacts (
    id           INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name         VARCHAR(120) NOT NULL,
    email        VARCHAR(180) NOT NULL,
    message      TEXT         NOT NULL,
    submitted_at DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
    is_read      TINYINT(1)   NOT NULL DEFAULT 0   -- 0 = unread, 1 = read
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- (OPTIONAL) View all submitted contact messages:
--   SELECT * FROM contacts ORDER BY submitted_at DESC;
-- ============================================================
