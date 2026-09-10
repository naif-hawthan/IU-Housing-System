<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الجامعة الإسلامية - الصفحة الرئيسية</title>
  <link rel="stylesheet" href="style2.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* الشعار */
    .logo-img {
      width: 120px;
      height: 120px;
      border-radius: 50%; /* جعل الشعار دائري */
      object-fit: cover; /* ضبط الصورة داخل الدائرة */
      border: 3px solid #007BFF; /* إطار حول الشعار */
    }

    /* الشريط المتحرك */
    .announcement-bar {
      background-color: #fdf6d3; /* خلفية الشريط لون أصفر فاتح */
      color: #444444; /* لون النص رمادي داكن */
      font-weight: bold;
      animation: slideIn 2s ease-out;
    }

    .announcement-bar marquee {
      color: #007BFF; /* لون النص أزرق مناسب */
    }

    /* الحقول مع تأثير الأنيميشن */
    .button-container .btn {
      display: flex;
      align-items: center;
      margin: 10px 0; /* مسافة بين الأزرار */
      padding: 15px 25px;
      text-decoration: none;
      background-color: #007BFF;
      color: white;
      border-radius: 10px; /* زوايا دائرية أكبر */
      transition: transform 0.3s, background-color 0.3s;
      animation: popUp 1.2s ease-in-out;
    }

    .button-container .btn:hover {
      background-color: #0056b3;
      transform: scale(1.05); /* تكبير طفيف عند التمرير */
    }

    /* الأنيميشن */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    @keyframes slideIn {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    @keyframes popUp {
      from {
        transform: scale(0.8);
        opacity: 0;
      }
      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    /* النصوص */
    .registration-title {
      font-size: 1.8em; /* حجم خط أكبر */
      margin-bottom: 20px;
      color: #007BFF; /* لون مميز للعنوان */
    }
  </style>
</head>
<body>

<!-- رأس الصفحة -->
<header class="header">
  <div class="container header-container">
    <div class="logo">
      <img src="l.png" alt="شعار الجامعة الإسلامية" class="logo-img">
      <div>
        <h1 class="university-name">الجامعة الإسلامية</h1>
        <p class="tagline">المدينة المنورة - منارة العلم</p>
      </div>
    </div>
  </div>
</header>

<!-- شريط الإعلانات -->
<div class="announcement-bar">
  <marquee behavior="scroll" direction="right">أهلاً بكم في موقع الجامعة الإسلامية - تابعوا آخر التحديثات حول البرامج الأكاديمية والمنح الدراسية!</marquee>
</div>

<!-- المحتوى الرئيسي -->
<main class="main-content">
  <!-- قسم نبذة عن الجامعة -->
  <section class="about">
    <h2>نبذة عن الجامعة الإسلامية</h2>
    <p>تأسست الجامعة الإسلامية في المدينة المنورة لتكون منارة للعلم والمعرفة، وتهدف إلى تقديم تعليم متميز يستند إلى الوسطية والاعتدال. توفر الجامعة برامج أكاديمية متخصصة في الدراسات الإسلامية والعلوم الشرعية واللغة العربية.</p>
  </section>

  <!-- قسم نبذة عن السكن الجامعي -->
  <section class="housing-info">
    <h2>السكن الجامعي</h2>
    <p>يوفر السكن الجامعي بيئة مريحة وآمنة للطلاب الوافدين من جميع أنحاء العالم، مع خدمات متكاملة تشمل الغرف المفروشة، وصالات الطعام، ومرافق رياضية، وإنترنت، وخدمات صيانة.</p>
  </section>

  <!-- قسم الأزرار -->
  <div class="button-container">
    <h3 class="registration-title">التسجيل</h3>
    <a href="login.php" class="btn login-btn">التسجيل كطالب <span class="icon">👨‍🎓</span></a>
    <a href="login.php" class="btn admin-btn">التسجيل كمسؤول <span class="icon">👨‍💼</span></a>
  </div>

  <!-- قسم خريطة الموقع -->
  <section id="map" class="container mt-5">
    <h2 class="section-title">موقع الجامعة الإسلامية</h2>
    <div id="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.2807067071986!2d39.56541973401954!3d24.480873900210756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e8c8ebd6e8d4d7%3A0x25744d6c94b9c964!2z2LPYqNin2Kkg2KfYt9mK2YfYqNin2Kkg2qfYqSDYp9i52KfYqNin2KjYqCDYp9mK2KfZ2LTYp9mK2KjYqNin2KjYq9mK2YUg2KzZ2KfYqNin2KjY!5e0!3m2!1sar!2seg!4v1698834077776!5m2!1sar!2seg"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>
</main>

<!-- تذييل الصفحة -->
<footer class="footer">
  <p>© 2024 IU Housing System. جميع الحقوق محفوظة.</p>
</footer>

</body>
</html>
