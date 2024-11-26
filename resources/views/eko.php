<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekonomi Haberleri</title>
    <style>
        /* Genel Stil */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .page-title {
            background-color: #1a8a34;
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
            color: #1a8a34;
            font-weight: bold;
            text-align: right;
            display: inline-block;
        }

        .news-card a:hover {
            color: #116926;
        }

        .market-section {
            background-color: #f1f5f1;
            padding: 20px;
            margin: 20px auto;
            max-width: 1200px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .market-section h2 {
            margin-bottom: 15px;
            font-size: 20px;
            color: #1a8a34;
        }

        .market-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .market-table th,
        .market-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .market-table th {
            background-color: #1a8a34;
            color: white;
        }

        .market-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .market-table tr:hover {
            background-color: #f1f5f1;
        }
    </style>
</head>

<body>
    <?php include "header.php";?>


    <!-- Sayfa Başlığı -->
    <div class="page-title">Ekonomi Haberleri</div>

    <!-- Öne Çıkan Haber -->
    <div class="featured-news">
        <h1>Dolar Rekor Kırdı: Piyasalarda Son Durum</h1>
    </div>

    <!-- Piyasa Verileri -->
    <div class="market-section">
        <h2>Piyasa Verileri</h2>
        <table class="market-table">
            <thead>
                <tr>
                    <th>Parite</th>
                    <th>Alış</th>
                    <th>Satış</th>
                    <th>Değişim</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>USD/TRY</td>
                    <td>25.30</td>
                    <td>25.40</td>
                    <td>+0.50%</td>
                </tr>
                <tr>
                    <td>EUR/TRY</td>
                    <td>27.80</td>
                    <td>27.95</td>
                    <td>+0.30%</td>
                </tr>
                <tr>
                    <td>BTC/USD</td>
                    <td>32,500</td>
                    <td>32,700</td>
                    <td>-2.10%</td>
                </tr>
                <tr>
                    <td>ONS Altın</td>
                    <td>1,950</td>
                    <td>1,960</td>
                    <td>+0.20%</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Haber Kartları -->
    <div class="news-container">
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Merkez Bankası Faiz Kararı</h2>
                <p>Merkez Bankası'nın son faiz kararı piyasaları nasıl etkiledi?</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Borsa İstanbul'da Yükseliş</h2>
                <p>Borsa İstanbul bugün yüzde 2 değer kazandı. Detaylar burada.</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
        <div class="news-card">
            <img src="https://via.placeholder.com/300x200" alt="Haber Görseli">
            <div class="card-content">
                <h2>Kripto Paralarda Dalgalanma</h2>
                <p>Bitcoin ve Ethereum piyasasında dalgalanma devam ediyor.</p>
                <a href="#">Devamını Oku &rarr;</a>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>

</html>