<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Sitesi Anasayfa</title>
    <style>
        /* Anasayfa genel stil */
        .hero-section {
            background: url('https://via.placeholder.com/1200x400') no-repeat center center/cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-section h1 {
            z-index: 1;
            font-size: 36px;
            font-weight: bold;
        }

        .content-section {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .news-card {
            flex: 1;
            min-width: 300px;
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
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
        }

        .news-card .card-content h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .news-card .card-content p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .news-card .card-content a {
            text-decoration: none;
            color: #00aaff;
            font-weight: bold;
            transition: color 0.3s;
        }

        .news-card .card-content a:hover {
            color: #008ecc;
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>

<div class="hero-section">
    <h1>En Güncel Haberler İçin HaberSitesi</h1>
</div>

<div class="content-section">
    <!-- Haber Kartları -->
    <div class="news-card">
        <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
        <div class="card-content">
            <h2>Gündemden Son Dakika Haberler</h2>
            <p>Son dakika gelişmelerini ve gündem haberlerini takip edin...</p>
            <a href="#">Devamını Oku →</a>
        </div>
    </div>

    <div class="news-card">
        <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
        <div class="card-content">
            <h2>Spor Dünyasından Haberler</h2>
            <p>Spor dünyasındaki gelişmeler, maç sonuçları ve daha fazlası...</p>
            <a href="#">Devamını Oku →</a>
        </div>
    </div>

    <div class="news-card">
        <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
        <div class="card-content">
            <h2>Teknoloji Gündemi</h2>
            <p>Yenilikçi teknolojiler ve son trendler hakkında bilgi edinin...</p>
            <a href="#">Devamını Oku →</a>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
</body>
</html>
