<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# Laravel Haber Sitesi Projesi

![Ana Sayfa](https://via.placeholder.com/800x400?text=Haber+Sitesi+Ana+Sayfa)

## Proje Hakkında

Bu proje, Laravel kullanılarak geliştirilmiş basit bir haber sitesidir. Farklı kategorilerde (Gündem, Spor, Ekonomi, Teknoloji, Kültür ve Sanat vb.) haberler sunmayı amaçlamaktadır. Şu an için temel HTML ve CSS yapıları kullanılarak oluşturulmuş statik sayfalardan oluşmaktadır.

## Ekran Görüntüleri

### Ana Sayfa
![Ana Sayfa](https://via.placeholder.com/600x300?text=Ana+Sayfa)

### Gündem Haberleri
![Gündem](https://via.placeholder.com/600x300?text=Gundem+Haberleri)

### Ekonomi Haberleri
![Ekonomi](https://via.placeholder.com/600x300?text=Ekonomi+Haberleri)

## Özellikler

- Duyarlı (responsive) tasarım
- Farklı haber kategorileri
- Modern ve kullanıcı dostu arayüz
- Kategori ve alt kategori yapısı
- Öne çıkan haberler bölümü

## Teknolojiler

- **Laravel 10**: PHP tabanlı web uygulama framework'ü
- **PHP 8.2**: Backend programlama dili
- **HTML5/CSS3**: Frontend yapısı
- **Blade**: Laravel'in template motoru

## Kurulum

### Gereksinimler

- PHP >= 8.1
- Composer
- Node.js & NPM
- Laravel 10.x

### Adımlar

1. Repo'yu klonlayın:
   ```bash
   git clone https://github.com/KULLANICI_ADI/laravel-haber-sitesi.git
   cd laravel-haber-sitesi
   ```

2. Bağımlılıkları yükleyin:
   ```bash
   composer install
   npm install
   ```

3. `.env` dosyasını oluşturun:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Uygulamayı çalıştırın:
   ```bash
   php artisan serve
   ```

5. Tarayıcınızdan `http://localhost:8000` adresine gidin.

## Proje Yapısı

### View Dosyaları
- `index.php` - Ana sayfa
- `gundem.php` - Gündem haberleri
- `spor.php` - Spor haberleri
- `eko.php` - Ekonomi haberleri
- `tekno.php` - Teknoloji haberleri
- `kultur.php` - Kültür ve sanat haberleri
- `yapayzeka.php` - Yapay zeka haberleri
- `metaverse.php` - Metaverse haberleri
- `sergi.php` - Sergiler haberleri
- `tytro.php` - Tiyatro gösterimleri
- `konserhbr.php` - Konserler haberleri

### Ortak Bileşenler
- `header.php` - Tüm sayfalarda kullanılan üst bölüm (navigasyon menüsü)
- `footer.php` - Tüm sayfalarda kullanılan alt bölüm

### Rota Yapısı

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/anasayfa', function () {
    return view('index');
});

Route::get('/gündem-haberleri', function () {
    return view('gundem');
});

Route::get('/spor-haberleri', function () {
    return view('spor');
});

Route::get('/ekonomi-haberleri', function () {
    return view('eko');
});

Route::get('/teknoloji-haberleri', function () {
    return view('tekno');
});
Route::get('/kultur-haberleri', function () {
    return view('kultur');
});

Route::get('/yapay-zeka-haberleri', function () {
    return view('yapayzeka');
});

Route::get('/metaverse-haberleri', function () {
    return view('metaverse');
});

Route::get('/sergiler-haberleri', function () {
    return view('sergi');
});

Route::get('/tiyatro-gosterimleri-haberleri', function () {
    return view('tytro');
});

Route::get('/konserler-haberleri', function () {
    return view('konserhbr');
});
```

## Sayfalar ve İçerikleri

### Ana Sayfa
Ana sayfa, öne çıkan haberlerle birlikte temel kategorilere ait haberleri gösterir. Hero bölümünde önemli bir başlık yer alır.

### Kategori Sayfaları
Her kategori sayfası, ilgili alana ait haberleri gösterir ve genellikle:
- Kategori başlığı
- Öne çıkan haber (hero section)
- Haber kartları
- İlgili alt kategorilere linkler

şeklinde yapılandırılmıştır.

## Navigasyon Yapısı

Site navigasyonu, `header.php` dosyasında tanımlanan bir menü çubuğu üzerinden sağlanır. Ana kategoriler ve bazı alt kategoriler için dropdown menüler içerir.

```
- Ana Sayfa
- Gündem
- Spor
- Ekonomi
- Teknoloji
  |- Yapay Zeka
  |- Metaverse
- Kültür & Sanat
  |- Sergiler
  |- Tiyatro Gösterimleri
  |- Konserler
```

## Tasarım Elementleri

- **Renk Şeması**: Her kategori sayfası kendi rengine sahiptir
  - Gündem: #1a1a2e
  - Ekonomi: #1a8a34
  - Spor: #007bff
  - Teknoloji: #0044cc
  - Kültür & Sanat: #e64a19
  - Yapay Zeka: #2c3e50
  - Metaverse: #8e44ad
  - Tiyatro: #2c3e50
  - Sergiler: #2c3e50
  - Konserler: #34495e

- **Kart Yapısı**: Tüm haberlerin kart tasarımı benzer şekilde yapılandırılmıştır:
  - Görsel
  - Başlık
  - Kısa açıklama
  - "Devamını Oku" linki

## Gelecek Geliştirmeler

- Veritabanı entegrasyonu
- Admin paneli
- Kullanıcı kimlik doğrulama ve yetkilendirme
- Dinamik içerik yönetimi
- Yorum sistemi
- Arama fonksiyonu
- SEO optimizasyonu
- Sosyal medya entegrasyonu

## Katkıda Bulunma

1. Projeyi fork edin
2. Feature branch oluşturun (`git checkout -b feature/amazing-feature`)
3. Değişikliklerinizi commit edin (`git commit -m 'Harika özellik eklendi'`)
4. Branch'inizi push edin (`git push origin feature/amazing-feature`)
5. Pull Request açın

## Lisans

Bu proje [MIT Lisansı](LICENSE) altında lisanslanmıştır.

## İletişim

Proje Sahibi: Mehmet DOĞAN
GitHub: https://github.com/mehmetdogandev
E-posta: mehmetdogan.dev@gmail.com