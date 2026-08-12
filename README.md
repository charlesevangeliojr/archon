<div align="center">
  <img src="public/assets/logo/Archon Logo.png" alt="Archon Logo" width="300"/>
  <h1>Archon Special Machineries Inc.</h1>
  <p><strong>Premium Heavy Duty Truck Provider & Official Distributor of Sinotruk Howo in the Philippines</strong></p>
  <br />
  <p>🚀 <strong>Live Demo:</strong> <a href="https://archon.wasmer.app" target="_blank">archon.wasmer.app</a></p>
</div>

---

## 📖 Overview

Archon is the leading provider and top distributor of **Sinotruk Howo** heavy equipment in the Philippines. This web application serves as the primary digital storefront and lead generation platform for Archon Special Machineries Inc.

Built with **Laravel 11**, the platform features a highly optimized, modern, glassmorphic UI with advanced CSS animations to project a premium brand image. It includes a custom-built, modular asset pipeline via **Vite** and a secure, responsive backend to manage quotation requests seamlessly.

## ✨ Key Features

- **Premium UI/UX:** Stunning dark-mode aesthetic with custom glassmorphism, dynamic scroll reveal animations, and micro-interactions.
- **Custom Modular CSS System:** A highly maintainable `app.css` architecture split into 26 modular files for rapid scaling and performance.
- **Dynamic ScrollSpy Navigation:** An intelligent navigation bar that updates dynamically based on viewport intersection.
- **Integrated Quotation System:** A secure, database-backed "Request a Quote" pipeline designed for maximum conversion.
- **Admin Dashboard:** A real-time data table utilizing Tailwind CSS for rapid, beautiful management of incoming leads.
- **SEO & Accessibility Optimized:** Fully compliant with modern web accessibility standards (ARIA roles, autocomplete, semantic HTML) and SEO meta tags.

## 🛠️ Technology Stack

- **Framework:** Laravel 11 (PHP 8.2+)
- **Frontend Assets:** HTML5, Modular CSS3, Vanilla ES6 JavaScript
- **Asset Bundler:** Vite
- **Database:** MySQL
- **Rapid Prototyping (Admin):** Tailwind CSS CDN

## 🚀 Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- **PHP** >= 8.2
- **Composer**
- **Node.js** & **NPM**
- **MySQL** Database

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-org/archon.git
   cd archon
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install NPM dependencies**
   ```bash
   npm install
   ```

4. **Environment Setup**
   Copy the example environment file and configure your database settings:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Update your `.env` with the correct database credentials.*

5. **Database Migration**
   Run the migrations to create the required tables (e.g., `quotes` table):
   ```bash
   php artisan migrate
   ```

6. **Start Development Servers**
   You will need two terminal tabs to run the backend and the frontend bundler concurrently.
   
   *Terminal 1 (Laravel server):*
   ```bash
   php artisan serve
   ```
   
   *Terminal 2 (Vite bundler):*
   ```bash
   npm run dev
   ```

7. **Visit the Application**
   Open `http://localhost:8000` in your browser.

## ☁️ Deployment (Wasmer)

This application is built to be deployed seamlessly on **Wasmer Edge** utilizing WebAssembly.

1. **Install Wasmer CLI**
   ```bash
   curl https://get.wasmer.io -sSfL | sh
   ```

2. **Configure Environment Variables**
   Since `.env` files are blocked from GitHub for security, you must configure your production environment variables (like Database credentials) directly in the **Wasmer Edge Dashboard** under your application settings, or pass them as secrets during deployment.

3. **Configure App**
   Ensure your `wasmer.toml` file is configured correctly for a Laravel/PHP environment.

4. **Deploy**
   Deploy the application directly to Wasmer Edge:
   ```bash
   wasmer deploy
   ```

## 📂 Project Structure Highlights

- `resources/css/modules/`: Contains the modular CSS files (e.g., `navbar.css`, `products.css`, `hero.css`).
- `resources/views/welcome.blade.php`: The primary landing page template.
- `resources/views/partials/`: Reusable Blade components like `navbar`, `footer`, and `quote-form`.
- `resources/views/admin/quotes.blade.php`: The admin dashboard for managing leads.
- `app/Models/Quote.php`: Eloquent model handling quote form submissions.

## 🔒 Security & Performance

- **CSRF Protection:** Fully integrated Laravel CSRF tokens on all forms.
- **Content Security Policy (CSP):** Configured to allow essential scripts while blocking unauthorized code evaluation.
- **Lazy Loading:** Images and assets are optimized with `loading="lazy"` to ensure blazing fast First Contentful Paint (FCP).

---

<div align="center">
  <p>Developed with ❤️ for <strong>Archon Special Machineries Inc.</strong> by <a href="https://github.com/charlesevangeliojr">charlesevangeliojr</a></p>
</div>
