<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiyatro Gösterimleri Haberleri</title>
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
    <div class="page-title">Tiyatro Gösterimleri Haberleri</div>

    <!-- Hero Banner (Öne Çıkan Haber) -->
    <div class="hero-section">
        <h1>En Yeni Tiyatro Gösterimleri ve Etkinlikler</h1>
    </div>

    <!-- Popüler Tiyatro Gösterimleri -->
    <div class="upcoming-section">
        <h2>Yaklaşan Tiyatro Gösterimleri</h2>
        <ul class="upcoming-list">
            <li><a href="#">Hamlet: Klasik Bir Efsane</a></li>
            <li><a href="#">Bir Delinin Hatıra Defteri</a></li>
            <li><a href="#">Dijital Tiyatro: Geleceğe Bakış</a></li>
            <li><a href="#">Güle Güle Dedi</a></li>
            <li><a href="#">Yaşam ve Sanat: Bir Arayış</a></li>
        </ul>
    </div>

    <!-- Tiyatro Gösterim Kartları -->
    <div class="show-container">
        <div class="show-card">
            <img src="https://via.placeholder.com/300x200" alt="Tiyatro Gösterimi">
            <div class="card-content">
                <h2>Hamlet: Klasik Bir Efsane</h2>
                <p>Shakespeare'in en ünlü eserlerinden biri olan Hamlet, modern bir dokunuşla sahneleniyor. Drama, intikam ve arayışla dolu bir yolculuk.</p>
                <a href="#">Detayları Gör &rarr;</a>
            </div>
        </div>
        <div class="show-card">
            <img src="https://via.placeholder.com/300x200" alt="Tiyatro Gösterimi">
            <div class="card-content">
                <h2>Bir Delinin Hatıra Defteri</h2>
                <p>Nikolay Gogol'un bu eşsiz eseri, bir delinin akıl sağlığını kaybedişinin derinliklerine iniyor. Psikolojik drama severler için unutulmaz bir deneyim.</p>
                <a href="#">Detayları Gör &rarr;</a>
            </div>
        </div>
        <div class="show-card">
            <img src="https://via.placeholder.com/300x200" alt="Tiyatro Gösterimi">
            <div class="card-content">
                <h2>Dijital Tiyatro: Geleceğe Bakış</h2>
                <p>Teknolojinin tiyatro sahnesine nasıl entegre olduğunu gösteren bir etkinlik. Sanat ve dijital dünyanın buluştuğu bu gösterim, sahnede yeni bir dönemi başlatıyor.</p>
                <a href="#">Detayları Gör &rarr;</a>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
