<!DOCTYPE html>

<html lang="ar" dir="rtl">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>لوحة تحكم الأدمن</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>

/* تنسيق عام */

body {

margin: 0;

font-family: 'Arial', sans-serif;

display: flex;

min-height: 100vh;

}

/* الشريط الجانبي */

.sidebar {

width: 250px;

background: #2c3e50;

color: #ecf0f1;

box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);

}

.sidebar-header {

padding: 20px;

text-align: center;

font-size: 1.5rem;

font-weight: bold;

}

.sidebar-menu {

list-style: none;

padding: 0;

margin: 0;

}

.sidebar-menu li {

padding: 15px 20px;

cursor: pointer;

display: flex;

align-items: center;

gap: 10px;

}

.sidebar-menu li:hover {

background: #34495e;

}

/* الشريط العلوي */

.top-bar {

width: calc(100% - 250px);

background: #ecf0f1;

padding: 10px 20px;

display: flex;

justify-content: space-between;

align-items: center;

position: fixed;

top: 0;

right: 0;

}

.search-box {

display: flex;

align-items: center;

gap: 5px;

}

.search-box input {

padding: 5px 10px;

border: 1px solid #bdc3c7;

border-radius: 5px;

}

.user-info {

display: flex;

align-items: center;

gap: 15px;

}

/* المحتوى الرئيسي */

.main-content {

margin-top: 70px;

padding: 20px;

width: 100%;

}

/* الإحصائيات */

.stats {

display: flex;

gap: 20px;

margin-bottom: 30px;

}

.stat-card {

background: #3498db;

color: #fff;

padding: 20px;

flex: 1;

text-align: center;

border-radius: 10px;

box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

}

.stat-card h3 {

font-size: 2rem;

margin: 0;

}

.stat-card p {

margin: 10px 0 0;

}

/* البطاقات */

.cards {

display: flex;

gap: 20px;

}

.card {

flex: 1;

padding: 20px;

background: #ecf0f1;

border-radius: 10px;

text-align: center;

box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

}

.card h3 {

margin: 0;

font-size: 1.5rem;

}

.card p {

margin: 10px 0;

}

.card button, .card a {

padding: 10px 20px;

background: #3498db;

color: #fff;

border: none;

border-radius: 5px;

cursor: pointer;

text-decoration: none;

display: inline-block;

}

.card button:hover, .card a:hover {

background: #2980b9;

}

</style>

</head>

<body>

<!-- الشريط الجانبي -->

<aside class="sidebar">

<div class="sidebar-header">

<h2>لوحة التحكم</h2>

</div>

<ul class="sidebar-menu">

<li onclick="location.href='home.php'"><i class="fas fa-home"></i> الصفحة الرئيسية</li>

<li onclick="location.href='index.html'"><i class="fas fa-chart-bar"></i> صفحة الموقع </li>

<li><i class="fas fa-cogs"></i> الإحصائيات</li>

<li onclick="logout()"><i class="fas fa-sign-out-alt"></i> تسجيل الخروج</li>

</ul>

</aside>
xml

<!-- المحتوى الرئيسي -->
<main class="main-content">
    <!-- الشريط العلوي -->
    <header class="top-bar">
        <div class="search-box">
            <input type="text" placeholder="بحث...">
            <i class="fas fa-search"></i>
        </div>
        <div class="user-info">
            <i class="fas fa-bell"></i>
            <i class="fas fa-envelope"></i>
            <span>مرحبًا، الأدمن</span>
            <i class="fas fa-user-circle"></i>
        </div>
    </header>

    <!-- الإحصائيات -->
    <section class="stats">
        <div class="stat-card">
            <h3>50</h3>
            <p>المستخدمون المسجلون</p>
        </div>
        <div class="stat-card">
            <h3>20</h3>
            <p>الغرف المتاحة</p>
        </div>
        <div class="stat-card">
            <h3>70%</h3>
            <p>الإشغال العام</p>
        </div>
    </section>

    <!-- البطاقات -->
    <section class="cards">
        <div class="card">
            <h3>إدارة السكن</h3>
            <p>وتعديل بيانات الغرف</p>
            <a href="booking.php" class="button">عرض المزيد</a>
        </div>
        <div class="card">
            <h3>إدارة المستخدمين</h3>
            <a href="user_management.php" class="button">عرض المزيد</a>
        </div>
    </section>
</main>
<script>
    // تحقق من حالة تسجيل الدخول عند فتح الصفحة
    document.addEventListener('DOMContentLoaded', () => {
        const isLoggedIn = localStorage.getItem('isLoggedIn');
        if (isLoggedIn === 'true') {
            document.getElementById('loginBox').classList.remove('active');
            document.getElementById('dashboard').classList.add('active');
        } else {
            document.getElementById('loginBox').classList.add('active');
        }
    });

    function logout() {
        // إزالة حالة تسجيل الدخول
        localStorage.removeItem('isLoggedIn');
        // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
        window.location.href = 'login.php'; // توجيه إلى صفحة تسجيل الدخول
    }

    function login() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const errorMessage = document.getElementById('errorMessage');

        // التحقق من البيانات
        if (username === 'admin' && password === 'admin') {
            // تخزين حالة تسجيل الدخول
            localStorage.setItem('isLoggedIn', 'true');
            // عرض لوحة التحكم وإخفاء شاشة تسجيل الدخول
            document.getElementById('loginBox').classList.remove('active');
            document.getElementById('dashboard').classList.add('active');
        } else {
            // عرض رسالة خطأ
            errorMessage.textContent = "اسم المستخدم أو كلمة المرور غير صحيحة!";
        }
    }
</script>

</body>

</html>