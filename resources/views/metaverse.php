<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metaverse Haberleri</title>
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
            background-color: #8e44ad;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .hero-section {
            background: url('https://via.placeholder.com/1200x500') no-repeat center center/cover;
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
            color: #8e44ad;
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
            color: #8e44ad;
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
    <div class="page-title">Metaverse Haberleri</div>

    <!-- Hero Banner (Öne Çıkan Haber) -->
    <div class="hero-section">
        <h1>Metaverse'teki Son Gelişmeler</h1>
    </div>

    <!-- Metaverse Trend Konuları -->
    <div class="trending-section">
        <h2>Metaverse'teki Popüler Konular</h2>
        <ul class="trending-list">
            <li><a href="#">Metaverse ve Sanal Gerçeklik: Geleceği Keşfedin</a></li>
            <li><a href="#">Metaverse’de Dijital Mülkiyet ve NFT’ler</a></li>
            <li><a href="#">Metaverse Oyunları: Sanal Dünyada Yenilikler</a></li>
            <li><a href="#">Sosyal Etkileşim ve Metaverse: İnsanlar Arası Bağlantılar</a></li>
            <li><a href="#">E-ticaretin Metaverse’deki Yeri</a></li>
        </ul>
    </div>

    <!-- Metaverse Haber Kartları -->
    <div class="news-container">
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Metaverse’de Sanal Gerçeklik Devrimi</h2>
                <p>Metaverse, sanal gerçeklik dünyasında devrim yaratacak yeniliklerle dolu. Bu alandaki en son gelişmeleri keşfedin.</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Metaverse ve Dijital Mülkiyet</h2>
                <p>Metaverse dünyasında dijital mülkler ve NFT’ler, sahiplik anlayışını baştan yaratıyor.</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Metaverse’de Oyunlar ve Etkileşim</h2>
                <p>Metaverse oyun dünyası, oyunculara yeni fırsatlar ve etkileşimler sunuyor. Sanal dünyada neler mümkün?</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
