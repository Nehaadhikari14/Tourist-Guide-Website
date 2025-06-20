Tourist Guide Website 🌍

This is a **simple full-stack web project** built as part of a learning and internship experience. It showcases a tourism guide for New Delhi. The website consists of multiple sections like Home, About, Services, Gallery, and Contact Us. The frontend is developed using **HTML and CSS**, and the backend uses **PHP and MySQL** for storing user-submitted form data.

📌 Features

- 🏠 Home page with images and intro text
- 📖 About Us section with tourism details
- 🧭 Services section: Taxi, Food, Guide
- 🖼️ Gallery section with tourist pictures
- 📬 Contact form with PHP form submission to MySQL
- 🔍 Basic search bar that scrolls to sections (handled in PHP)

💻 Technologies Used

- **Frontend**: HTML5, CSS3
- **Backend**: PHP
- **Database**: MySQL
- **Tools**: XAMPP (local server), GitHub

📂 Project Structure

- 📄 all images → Static image files
- 📄 style.css → Custom styles
- 📄 index.html → Main homepage
- 📄 menu.php → Navigation bar (PHP include)
- 📄 userinfo.php → Backend form processing
- 📄 redirect.php → Search term redirect logic
- 📄 README.md → Project documentation

🔗 Live Demo (Frontend Only)

You can preview the UI via GitHub Pages (no PHP will run):
🔗 [https://Nehaadhikari14.github.io/Tourist-Guide-Website](https://yourusername.github.io/tourist-guide) 
> ⚠️ GitHub Pages supports only static frontend — backend logic (PHP, MySQL) must be run locally.

🎥 Video Demo

If you'd like to see the website working with full backend functionality (PHP & MySQL), watch the demo below:
▶️ [Click here to watch the demo](https://your-video-link.com)
> This demo shows how the contact form, search scroll, and other features work on a local XAMPP server.

🧪 Run Locally (With PHP + MySQL)

1. Install **XAMPP**
2. Place project folder in `htdocs`
3. Start Apache & MySQL
4. Visit `http://localhost/your-folder/index.php`
5. Set up MySQL database:

```sql```
CREATE DATABASE userdata;
USE userdata;
CREATE TABLE userinfodata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(100),
    email VARCHAR(100),
    mobile VARCHAR(20),
    comment TEXT
);

🙋‍♀️ Developed By
Neha Adhikari
BCA Student 

📫 LinkedIn (linkedin.com/in/neha-adhikari-117a85277)

💼 For Reviewers
- Demonstrates understanding of PHP + MySQL integration.
- Clean HTML/CSS structure.
- Clear backend processing with form input.
- GitHub Pages for frontend demo + XAMPP for local backend.

⭐ Show Some Love
Star ⭐ the repo if you found this project helpful!



