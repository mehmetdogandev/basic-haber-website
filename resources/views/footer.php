<footer class="footer">
    <div class="footer-container">
        <div class="footer-section about">
            <h2>Hakkımızda</h2>
            <p>
                HaberSitesi, en güncel haberleri tarafsız ve hızlı bir şekilde sunmayı amaçlayan bir platformdur. 
                Bizi takip ederek gündemi yakından takip edebilirsiniz.
            </p>
        </div>
        <div class="footer-section links">
            <h2>Hızlı Linkler</h2>
            <ul>
                <li><a href="#">Hakkımızda</a></li>
                <li><a href="#">İletişim</a></li>
                <li><a href="#">Gizlilik Politikası</a></li>
                <li><a href="#">Kullanım Şartları</a></li>
            </ul>
        </div>
        <div class="footer-section social">
            <h2>Bizi Takip Edin</h2>
            <div class="social-icons">
                <a href="#" title="Facebook">📘</a>
                <a href="#" title="Twitter">🐦</a>
                <a href="#" title="Instagram">📸</a>
                <a href="#" title="LinkedIn">🔗</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 HaberSitesi. Tüm hakları saklıdır.</p>
    </div>
</footer>

<style>
    /* Footer genel stil */
    .footer {
        background-color: #1a1a2e;
        color: white;
        padding: 40px 20px;
        margin-top: 30px;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1200px;
        margin: 0 auto;
        flex-wrap: wrap;
        gap: 20px;
    }

    .footer-section {
        flex: 1;
        min-width: 250px;
    }

    .footer-section h2 {
        font-size: 18px;
        margin-bottom: 15px;
        color: #00aaff;
    }

    .footer-section p, 
    .footer-section ul, 
    .footer-bottom {
        font-size: 14px;
        line-height: 1.6;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin-bottom: 10px;
    }

    .footer-section ul li a {
        text-decoration: none;
        color: white;
        transition: color 0.3s;
    }

    .footer-section ul li a:hover {
        color: #00aaff;
    }

    .footer-section .social-icons a {
        font-size: 20px;
        margin-right: 15px;
        color: white;
        transition: color 0.3s;
    }

    .footer-section .social-icons a:hover {
        color: #00aaff;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
        border-top: 1px solid #333;
        padding-top: 10px;
    }

    /* Responsive tasarım */
    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .footer-section {
            min-width: 100%;
        }

        .footer-section ul {
            display: inline-block;
        }
    }
</style>
