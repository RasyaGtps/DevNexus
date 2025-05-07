# 🚀 DevNexus - Komunitas Developer Indonesia

<div align="center">
  <img src="public/images/logo.png" alt="DevNexus Logo" width="200">
  
  [![Laravel](https://img.shields.io/badge/Laravel-v10.0-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
  [![Tailwind CSS](https://img.shields.io/badge/Tailwind-v3.0-38B2AC?style=for-the-badge&logo=tailwind-css)](https://tailwindcss.com)
  [![License](https://img.shields.io/badge/license-MIT-blue?style=for-the-badge)](LICENSE)
</div>

## 📋 Deskripsi

DevNexus adalah platform komunitas developer Indonesia yang dirancang untuk memfasilitasi kolaborasi, pembelajaran, dan networking di antara para developer. Platform ini menyediakan berbagai fitur untuk mendukung pertumbuhan ekosistem developer di Indonesia.

## ✨ Fitur Utama

- 🤝 **Forum Diskusi**
  - Thread & diskusi dengan dukungan markdown
  - Sistem voting dan reputasi
  - Code highlighting untuk berbagai bahasa pemrograman

- 🎯 **Event & Workshop**
  - Manajemen event teknikal
  - Workshop online & offline
  - Sistem pendaftaran terintegrasi

- 📚 **Resource Sharing**
  - Blog & tutorial
  - Code snippet sharing
  - Resource pembelajaran

- 👥 **Komunitas**
  - Profil developer
  - Sistem reputasi
  - Networking

## 🛠️ Tech Stack

- **Frontend:**
  - Blade Template Engine
  - Tailwind CSS
  - Alpine.js
  - Laravel Mix

- **Backend:**
  - Laravel 10
  - MySQL
  - Redis
  - Laravel Sanctum

- **Tools & Services:**
  - Docker
  - GitHub Actions
  - AWS/Digital Ocean
  - Mailgun

## 📦 Prasyarat

- PHP >= 8.1
- Composer
- Node.js >= 16
- MySQL >= 8.0
- Redis

## 🚀 Instalasi

1. Clone repository
```bash
git clone https://github.com/username/devnexus.git
cd devnexus
```

2. Install dependencies
```bash
composer install
npm install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi database di file `.env`
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=devnexus
DB_USERNAME=root
DB_PASSWORD=
```

5. Jalankan migrasi dan seeder
```bash
php artisan migrate --seed
```

6. Compile assets
```bash
npm run dev
```

7. Jalankan server
```bash
php artisan serve
```

## 🔧 Development

### Coding Standards

Project ini mengikuti standar coding PSR-12 dan menggunakan Laravel Pint untuk formatting:

```bash
# Format kode
./vendor/bin/pint

# Jalankan tests
php artisan test
```

### Git Workflow

1. Buat branch dari `develop`
2. Commit changes dengan [Conventional Commits](https://www.conventionalcommits.org/)
3. Submit pull request ke `develop`

## 📝 Kontribusi

Kami sangat terbuka dengan kontribusi dari komunitas. Silakan baca [CONTRIBUTING.md](CONTRIBUTING.md) untuk panduan kontribusi.

## 📄 Lisensi

Project ini dilisensikan di bawah [MIT License](LICENSE).

## 👥 Tim

- **Project Lead:** [Nama Lead]
- **Backend Developer:** [Nama Backend Dev]
- **Frontend Developer:** [Nama Frontend Dev]
- **UI/UX Designer:** [Nama Designer]

## 📞 Kontak

- Website: [https://devnexus.id](https://devnexus.id)
- Email: [contact@devnexus.id](mailto:contact@devnexus.id)
- Twitter: [@devnexusid](https://twitter.com/devnexusid)
- Discord: [DevNexus Community](https://discord.gg/devnexus)

---

<div align="center">
  <sub>Built with ❤️ by Developer Indonesia</sub>
</div>
