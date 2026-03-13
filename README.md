# 📁 Shreyansh Pandey — e-Portfolio
### BCA Student | IMED Pune

---

## 🗂 Folder Structure

```
/portfolio/
├── index.php              ← Home page (Hero section)
├── about.php              ← About Me page
├── skills.php             ← Technical Skills page
├── experiments.php        ← PHP Practical Experiments (6 experiments)
├── mini_project.php       ← Mini Project page (placeholders)
├── resume.php             ← Resume embed + download
├── contact.php            ← Contact form with MySQL storage
├── setup.sql              ← Run this in phpMyAdmin to set up the DB
├── css/
│   └── style.css          ← Main dark-theme stylesheet
├── images/
│   └── (place resume.pdf and screenshots here)
└── includes/
    ├── db.php             ← Database connection
    ├── header.php         ← Shared navigation header
    └── footer.php         ← Shared footer
```

---

## ⚙️ Setup Instructions (XAMPP)

### Step 1 — Copy project files
Place the entire `/portfolio` folder inside:
```
C:\xampp\htdocs\portfolio\
```

### Step 2 — Start XAMPP services
Open XAMPP Control Panel and start:
- ✅ **Apache** (for PHP)
- ✅ **MySQL** (for the database)

### Step 3 — Set up the database
1. Open your browser: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Click the **SQL** tab at the top.
3. Copy and paste the contents of **`setup.sql`** into the text box.
4. Click **Go**.

This will create:
- Database: `portfolio_db`
- Table: `contacts` (stores contact form submissions)

### Step 4 — Open the portfolio
Visit: [http://localhost/portfolio/](http://localhost/portfolio/)

---

## 📸 Adding Your Photos & Resume

| File | Where to place |
|------|----------------|
| Profile photo | `/images/profile.jpg` — then uncomment the `<img>` tag in `about.php` |
| Resume PDF | `/images/resume.pdf` — it will auto-appear on the Resume page |
| Experiment screenshots | `/images/exp1.png`, `exp2.png`, etc. |
| Project screenshots | `/images/project_ss1.png`, etc. |

---

## 📧 Contact Form
- When a visitor submits the contact form, their **Name**, **Email**, and **Message** are saved to the `contacts` table in MySQL.
- To view submissions: open phpMyAdmin → `portfolio_db` → `contacts` table → **Browse**.

---

## 🛠 Technologies Used
- **PHP 8.x** — Server-side scripting
- **MySQL** — Database (via MySQLi)
- **HTML5** — Page structure
- **CSS3** — Styling (dark theme, responsive, animations)
- **XAMPP** — Local development environment

---

*Built with ❤️ by Shreyansh Pandey — BCA Student, IMED Pune*
"# my-portfolio" 
