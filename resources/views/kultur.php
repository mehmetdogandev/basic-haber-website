<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kültür ve Sanat Haberleri</title>
    <style>
        /* Genel Stil */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        .page-title {
            background-color: #e64a19;
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
            background: rgba(0, 0, 0, 0.4);
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
            color: #e64a19;
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
            color: #e64a19;
            font-weight: bold;
            text-align: right;
            display: inline-block;
        }

        .news-card a:hover {
            color: #c7350d;
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
            color: #e64a19;
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
            color: #e64a19;
            transition: color 0.3s;
        }

        .trending-list li a:hover {
            color: #c7350d;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>

    <!-- Sayfa Başlığı -->
    <div class="page-title">Kültür ve Sanat Haberleri</div>

    <!-- Öne Çıkan Haber -->
    <div class="featured-news">
        <h1>Modern Sanatın Yükselen Yıldızı: Yeni Sergiler ve Sanatçıların Yolu</h1>
    </div>

    <!-- Kültür ve Sanat Etkinlikleri -->
    <div class="trending-section">
        <h2>Yaklaşan Kültür ve Sanat Etkinlikleri</h2>
        <ul class="trending-list">
            <li><a href="#">Büyük Tiyatro Festivali Başlıyor</a></li>
            <li><a href="#">Sanatçılarla Bir Gün: Resim Sergileri</a></li>
            <li><a href="#">Müze Turu: Geçmişe Yolculuk</a></li>
            <li><a href="#">Film Galası: Yıldızlar Geceyi Aydınlatıyor</a></li>
            <li><a href="#">Yeni Bir Müzik Akımı: Dijital Sanat</a></li>
        </ul>
    </div>

    <!-- Kültür ve Sanat Haber Kartları -->
    <div class="news-container">
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Yeni Bir Sanatçı Dalgası: Genç Sanatçılar Sahneye Çıkıyor</h2>
                <p>Sanat dünyasına yeni bir soluk getiren genç sanatçılar, galerilerde boy göstermeye başladı.</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Geleneksel Müzik Festivali Kültür Buluşması</h2>
                <p>Ünlü sanatçılar, geleneksel müzikleri modern yorumlarla sahneye taşıyor.</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Film Festivali Başlıyor</h2>
                <p>Uluslararası film festivali, sinemaseverleri bir araya getiriyor. Katılmak için son günler!</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
