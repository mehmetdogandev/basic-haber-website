<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yapay Zeka Haberleri</title>
    <style>
        /* Genel Stil */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .page-title {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .featured-news {
            background: url('https://via.placeholder.com/1200x400') no-repeat center center/cover;
            height: 400px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .featured-news::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .featured-news h1 {
            position: relative;
            z-index: 1;
            font-size: 36px;
            font-weight: bold;
        }

        .news-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .news-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .news-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .news-card .card-content {
            padding: 15px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .news-card h2 {
            font-size: 18px;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .news-card p {
            font-size: 14px;
            color: #666;
            margin-bottom: auto;
        }

        .news-card a {
            margin-top: 15px;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            text-align: right;
            display: inline-block;
        }

        .news-card a:hover {
            color: #2980b9;
        }

        .trending-section {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .trending-section h2 {
            font-size: 20px;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .trending-list {
            list-style: none;
            padding: 0;
        }

        .trending-list li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .trending-list li a {
            text-decoration: none;
            color: #3498db;
            transition: color 0.3s;
        }

        .trending-list li a:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>

    <!-- Sayfa Başlığı -->
    <div class="page-title">Yapay Zeka Haberleri</div>

    <!-- Öne Çıkan Haber -->
    <div class="featured-news">
        <h1>Yapay Zeka Alanında Büyük Devrim: Yeni Gelişmeler</h1>
    </div>

    <!-- Trend Olan Yapay Zeka Teknolojileri -->
    <div class="trending-section">
        <h2>Yapay Zeka ile Trend Olan Konular</h2>
        <ul class="trending-list">
            <li><a href="#">GPT-4 ile Gelen Yenilikler</a></li>
            <li><a href="#">Yapay Zeka ve Etik Sorunlar</a></li>
            <li><a href="#">Otonom Araçlar ve Yapay Zeka</a></li>
            <li><a href="#">Yapay Zeka Destekli Sağlık Teknolojileri</a></li>
            <li><a href="#">Derin Öğrenme Uygulamaları ve Geleceği</a></li>
        </ul>
    </div>

    <!-- Yapay Zeka Haber Kartları -->
    <div class="news-container">
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>GPT-4: Yapay Zekada Yeni Bir Dönem</h2>
                <p>GPT-4, dil işleme alanındaki en son gelişmeleri temsil ediyor. Daha akıllı ve duyarlı bir yapay zeka.</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Yapay Zeka ile Sağlıkta Devrim</h2>
                <p>Yapay zeka, sağlık sektöründe tedavi yöntemlerini değiştiriyor. Akıllı algoritmalar, hastalıkları daha hızlı tespit ediyor.</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Yapay Zeka ve Robotik: Geleceğin İş Gücü</h2>
                <p>Yapay zeka destekli robotlar, iş dünyasında yeni bir devrim başlatıyor.</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
