# Haider Ali — Developer Portfolio

A developer portfolio and creative showcase built for **Haider Ali** (Laravel & PHP Developer | Web Developer & UI/UX Designer). Designed with a dark charcoal aesthetic, editorial typography, GSAP animations, and server-rendered Laravel architecture.

---

## ⚡ Tech Stack

- **Backend:** Laravel 12, PHP 8.3, Laravel Blade Templates
- **Database:** MySQL / MariaDB (XAMPP compatible)
- **Frontend:** Vanilla JavaScript (ES6+), Bootstrap 5, Custom CSS
- **Animation:** GSAP, GSAP ScrollTrigger
- **Asset Bundler:** Vite
- **Testing:** PHPUnit (10 feature/unit tests, 75 assertions)
- **Code Style:** Laravel Pint

---

## 🚀 Key Features

- **Editorial Hero Section:** Oversized typography with character masks, outline styling on `ER` & `ALI` over the portrait photo to preserve facial visibility, and an electric yellow accent dot.
- **Enhanced Studio Portrait:** Studio photography integrated with ambient gradients and dark theme aesthetics.
- **Projects Showcase & Case Studies:**
  - **Azora Solutions** — Enterprise IT & digital transformation
  - **AZ Halal Marts** — Modern retail & grocery e-commerce
  - **North Fork Auto** — Automotive sales & service portal
  - **Care Source Indy** — Healthcare services & patient intake
  - **Perfumes Collection** — Luxury fragrance catalog
  - **Mukoh Tires** — Commercial tire distribution & inventory
- **Contact Inquiry System:** Validated contact form saving submissions to MySQL database (`contact_messages` table) and queuing/dispatching notifications.
- **Strict "Zero Arrows" Aesthetic:** Completely clean modern layout with zero arrow glyphs across the entire user experience.
- **Full Responsive Design:** Tailored layouts for desktop, tablet, and mobile devices.

---

## 🛠️ Local Development & Setup

### Prerequisites

- PHP >= 8.3 (with `pdo_mysql`, `zip`, `intl`, `mbstring` extensions enabled)
- Composer
- Node.js & npm
- MySQL / MariaDB (e.g. XAMPP)

### Installation Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Haider-875/Haider-Ali-Portfolio.git
   cd Haider-Ali-Portfolio
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies & build assets:**
   ```bash
   npm install
   npm run build
   ```

4. **Environment Configuration:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup:**
   - Create a database in MySQL named `haider_portfolio` (e.g. in phpMyAdmin or MySQL CLI):
     ```sql
     CREATE DATABASE IF NOT EXISTS haider_portfolio CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
     ```
   - Update your `.env` database credentials if needed:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=haider_portfolio
     DB_USERNAME=root
     DB_PASSWORD=
     ```

6. **Run Migrations:**
   ```bash
   php artisan migrate
   ```

7. **Start Local Development Server:**
   ```bash
   php artisan serve
   ```
   Visit [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

---

## 🧪 Running Tests

```bash
php artisan test
```

## 🎨 Code Style

```bash
vendor/bin/pint
```

---

## 👤 Author

**Haider Ali**
- **Title:** Laravel & PHP Developer | Web Developer & UI/UX Designer
- **GitHub:** [@Haider-875](https://github.com/Haider-875)
- **Email:** [Hadihnd0@gmail.com](mailto:Hadihnd0@gmail.com)
