<head>
    <style>
        /* Genel stil */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Header stil */
        .header {
            background-color: #1a1a2e;
            color: white;
            padding: 15px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Logo */
        .logo a {
            font-size: 28px;
            font-weight: bold;
            color: #00aaff;
            text-decoration: none;
        }

        /* Navigasyon menü */
        .nav-menu ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
            position: relative;
        }

        .nav-menu a:hover {
            color: #00aaff;
        }

        /* Dropdown Menüsü */
        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #1a1a2e;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 10px;
            width: 180px;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu a {
            display: block;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .dropdown-menu a:hover {
            background-color: #00aaff;
        }

        /* Arama kutusu */
        .search-box {
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .search-box input {
            border: none;
            padding: 8px 12px;
            font-size: 14px;
            outline: none;
            flex: 1;
        }

        .search-box button {
            background-color: #00aaff;
            border: none;
            color: white;
            padding: 8px 16px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-box button:hover {
            background-color: #008ecc;
        }

        /* Sosyal medya ikonları */
        .social-icons a {
            margin-left: 10px;
            color: white;
            font-size: 18px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #00aaff;
        }

        /* Responsive tasarım */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-menu ul {
                flex-direction: column;
                gap: 10px;
                margin-top: 10px;
            }

            .search-social {
                display: flex;
                flex-direction: column;
                gap: 10px;
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <a href="anasayfa">HaberSitesi</a>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="anasayfa">Anasayfa</a></li>
                    <li><a href="gündem-haberleri">Gündem</a></li>
                    <li><a href="spor-haberleri">Spor</a></li>
                    <li><a href="ekonomi-haberleri">Ekonomi</a></li>

                    <li class="dropdown">
                        <a href="teknoloji-haberleri">Teknoloji</a>
                        <div class="dropdown-menu">
                            <a href="yapay-zeka-haberleri">Yapay Zeka</a>
                            <a href="metaverse-haberleri">Metaverse</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="kultur-haberleri">Kültür & Sanat</a>
                        <div class="dropdown-menu">
                            <a href="sergiler-haberleri">Sergiler</a>
                            <a href="tiyatro-gosterimleri-haberleri">Tiyatro Gösterimleri</a>
                            <a href="konserler-haberleri"> Konserler</a>
                        </div>
                    </li>
                    
                </ul>
            </nav>
            <div class="search-social">
                <div class="search-box">
                    <input type="text" placeholder="Arama yap...">
                    <button>🔍</button>
                </div>
            </div>
        </div>
    </header>
</body>