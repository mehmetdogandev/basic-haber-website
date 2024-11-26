<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konserler Haberleri</title>
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
            background-color: #34495e;
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

        .show-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .show-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .show-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .show-card .card-content {
            padding: 15px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .show-card h2 {
            font-size: 18px;
            color: #34495e;
            margin-bottom: 10px;
        }

        .show-card p {
            font-size: 14px;
            color: #666;
            margin-bottom: auto;
        }

        .show-card a {
            margin-top: 15px;
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            text-align: right;
            display: inline-block;
        }

        .show-card a:hover {
            color: #2980b9;
        }

        .upcoming-section {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .upcoming-section h2 {
            font-size: 20px;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .upcoming-list {
            list-style: none;
            padding: 0;
        }

        .upcoming-list li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .upcoming-list li a {
            text-decoration: none;
            color: #3498db;
            transition: color 0.3s;
        }

        .upcoming-list li a:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>

    <!-- Sayfa Başlığı -->
    <div class="page-title">Konserler Haberleri</div>

    <!-- Hero Banner (Öne Çıkan Haber) -->
    <div class="hero-section">
        <h1>En Yeni Konser Etkinlikleri</h1>
    </div>

    <!-- Popüler Konserler -->
    <div class="upcoming-section">
        <h2>Yaklaşan Konserler</h2>
        <ul class="upcoming-list">
            <li><a href="#">Rock Festivali: Yılın En Büyük Etkinliği</a></li>
            <li><a href="#">Jazz Gecesi: Canlı Performans</a></li>
            <li><a href="#">Elektronik Müzik Partisi</a></li>
            <li><a href="#">Klasik Müzik Konseri</a></li>
            <li><a href="#">Popüler Sanatçılarla Gece</a></li>
        </ul>
    </div>

    <!-- Konser Kartları -->
    <div class="show-container">
        <div class="show-card">
            <img src="https://via.placeholder.com/300x200" alt="Konser Gösterimi">
            <div class="card-content">
                <h2>Rock Festivali: Yılın En Büyük Etkinliği</h2>
                <p>Bu yılki en büyük rock festivali, dünyanın dört bir yanından gelen ünlü grupların performanslarına ev sahipliği yapacak.</p>
                <a href="#">Detayları Gör &rarr;</a>
            </div>
        </div>
        <div class="show-card">
            <img src="https://via.placeholder.com/300x200" alt="Konser Gösterimi">
            <div class="card-content">
                <h2>Jazz Gecesi: Canlı Performans</h2>
                <p>Jazz severler için unutulmaz bir gece! Dünyaca ünlü caz sanatçılarının canlı performanslarıyla büyülenmeye hazır olun.</p>
                <a href="#">Detayları Gör &rarr;</a>
            </div>
        </div>
        <div class="show-card">
            <img src="https://via.placeholder.com/300x200" alt="Konser Gösterimi">
            <div class="card-content">
                <h2>Elektronik Müzik Partisi</h2>
                <p>Elektronik müzik tutkunları için müthiş bir gece! DJ'lerin çaldığı ritimler sizi sabaha kadar dans etmeye teşvik edecek.</p>
                <a href="#">Detayları Gör &rarr;</a>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
        