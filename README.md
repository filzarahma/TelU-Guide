<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

<br><br>
---
<br><br>


# TelU-Guide

TelU Guide is a website aimed at helping students find their destination locations within the Telkom University campus area, especially new students who are not yet familiar with the campus area.

## Screenshots

### Login Page
![Login Page](docs/screenshots/TelU-Guide-Login-12-14-2024_07_04_PM.png)

### Register Page
![Register Page](docs/screenshots/TelU-Guide-Register-12-14-2024_07_04_PM.png)

### Forgot Password Page
![Forgot Password Page](docs/screenshots/TelU-Guide-Forgot-Password-12-14-2024_07_04_PM.png)

### Dashboard Page
![Dashboard Page](docs/screenshots/TelU-Guide-Dashboard-12-14-2024_07_05_PM.png)

### Interactive Map
![Interactive Map](docs/screenshots/TelU-Guide-Map-12-14-2024_07_05_PM.png)

### User Profile Pages
- **Student Profile**  
  ![Student Profile](docs/screenshots/TelU-Guide-Student-Profile-12-14-2024_07_05_PM.png)

- **Edit User Profile**  
  ![Edit User Profile](docs/screenshots/TelU-Guide-User-Edit-Profile-12-14-2024_07_05_PM.png)

### Security Pages
- **Security Information**  
  ![Security Information](docs/screenshots/TelU-Guide-Security-Info-12-14-2024_07_05_PM.png)

- **Security Profile**  
  ![Security Profile](docs/screenshots/TelU-Guide-Security-Profile-12-14-2024_07_05_PM.png)

- **Edit Security Profile**  
  ![Edit Security Profile](docs/screenshots/TelU-Guide-Security-Edit-Profile-12-14-2024_07_05_PM.png)

---

## Installation Guide

Follow the steps below to install and set up the TelU-Guide project. These instructions are based on the [Laravel 11 documentation](https://laravel.com/docs/11.x/installation).

### Prerequisites

Before starting, ensure your system meets the following requirements:

- PHP version: **8.2 to 8.4**
- Composer (PHP dependency manager)

For a full list of server requirements, refer to the [Laravel Server Requirements](https://laravel.com/docs/11.x/deployment#server-requirements).

---

### Installation Steps

1. **Install PHP, Composer, and Laravel Installer**

   For a quick setup on Windows, open PowerShell as an Administrator and run the following command:
   ```powershell
   Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
   ```

   This command will automatically install PHP 8.4, Composer, and the Laravel Installer.

2. **Initialize Environment Configuration**

   Copy the `.env.example` file to `.env` to set up the environment configuration:
   ```bash
   cp .env.example .env
   ```

   After copying, you can adjust the `.env` file as needed, such as setting the database connection or other environment variables.

3. **Install Project Dependencies**

   Navigate to the project directory and run the following commands:
   ```bash
   composer install
   composer update
   php artisan key:generate
   ```

4. **Start the Development Server**

   Use the following command to start Laravel's local development server:
   ```bash
   composer run dev
   ```

   Once the server is running, open your browser and visit [http://localhost:8000](http://localhost:8000) to view your application.

---

## Advanced Configuration

For additional setup options, such as environment variables or server deployment, refer to the [Laravel Configuration Documentation](https://laravel.com/docs/11.x/configuration).
