<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spor Haberleri</title>
    <style>
        /* Genel Stil */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .page-title {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .featured-section {
            background: url('https://via.placeholder.com/1200x400') no-repeat center center/cover;
            height: 400px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .featured-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .featured-section h1 {
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
            color: #333;
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
            color: #007bff;
            font-weight: bold;
            text-align: right;
            display: inline-block;
        }

        .news-card a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>

    <!-- Sayfa Başlığı -->
    <div class="page-title">Spor Haberleri</div>

    <!-- Öne Çıkan Haber -->
    <div class="featured-section">
        <h1>Son Dakika: Takım A Şampiyon Oldu!</h1>
    </div>

    <!-- Haber Kartları -->
    <div class="news-container">
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Futbol: Derbi Maçı Sonuçları</h2>
                <p>Derbi maçında heyecan doruktaydı. Maç detayları ve analizleri burada!</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Basketbol: Sezonun En İyi Oyuncuları</h2>
                <p>Bu sezonun öne çıkan oyuncuları ve performans istatistikleri burada!</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Tenis: Grand Slam Finali</h2>
                <p>Büyük turnuvanın finalinde kazanan isim ve maç detayları burada!</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Formula 1: Pistte Büyük Çekişme</h2>
                <p>Son yarışta kazanan pilot ve takımların durumuna dair bilgiler burada!</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
