# SAMEJA Company Profile

Sameja Compro is a web-based Company Profile and Management System built with the **Laravel 10** framework. This application allows administrators to manage content such as menus, promotions, and venue galleries for a restaurant or business entity, while providing a frontend view for customers.

## 📋 Features

### Admin Panel
- **Authentication**: Secure login and logout system for administrators.
- **Dashboard**: Overview of the system.
- **Menu Management**: Create, read, update, and delete (CRUD) food and beverage items, including prices and images.
- **Promo Management**: Manage active promotions, descriptions, and banners.
- **Venue Management**: Manage venue photos and information.
- **Payment History**: Tracking payment history (based on database schema).
- **Search Functionality**: Search features implemented for Dashboard, Menus, Promos, and Venues.

### Public Frontend
- **Landing Page**: Displays the company profile, menus, promos, and venues to visitors.

## 🛠 Tech Stack

- **Framework**: Laravel 10.x
- **Language**: PHP ^8.1
- **Database**: MySQL
- **Frontend**: Blade Templates, Bootstrap (integrated via Admin Template based on public assets).
- **Dependencies**:
  - `guzzlehttp/guzzle`
  - `laravel/sanctum`

## ⚙️ Prerequisites

Before you begin, ensure you have met the following requirements:
- **PHP** >= 8.1
- **Composer**
- **MySQL** (or MariaDB)
- **Web Server** (Apache/Nginx)

## 🚀 Installation & Setup

Follow these steps to get the project running on your local machine.

1. **Clone the Repository**
   ```bash
   git clone [https://github.com/yourusername/sameja-compro.git](https://github.com/yourusername/sameja-compro.git)
   cd sameja-compro
   ```

2.  **Install Dependencies**

    ```bash
    composer install
    ```

3.  **Environment Configuration**
    Copy the example environment file and configure your database credentials.

    ```bash
    cp .env.example .env
    ```

    Open the `.env` file and update the database settings:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

4.  **Generate App Key**

    ```bash
    php artisan key:generate
    ```

5.  **Run Migrations and Seeders**
    Create the necessary database tables and insert default users (if available).

    ```bash
    php artisan migrate --seed
    ```

    *(Note: Ensure `Database\Seeders\UserSeeder` is enabled in `DatabaseSeeder.php` or call it directly)*.

6.  **Link Storage**
    Since the application handles image uploads for Menus, Promos, and Venues, you must link the storage directory.

    ```bash
    php artisan storage:link
    ```

7.  **Run the Application**

    ```bash
    php artisan serve
    ```

    The application will be available at `http://127.0.0.1:8000`.

## 📂 Database Schema

Key tables managed by the application:

  - `users`: Admin credentials.
  - `menus`: Contains `name`, `price`, and `image`.
  - `promos`: Contains `name`, `description`, and `image`.
  - `venues`: Contains `name` and `image`.
  - `historypayments`: Contains transaction records (`name`, `note`, `price`, `check`).

## 🛣️ Key Routes

  - **Login**: `/` or `/login`
  - **Public Index**: `/index`
  - **Dashboard**: `/dashboard`
  - **Menu Management**: `/land-menu`
  - **Promo Management**: `/land-promo`
  - **Venue Management**: `/land-venue`

## 📄 License

This project is licensed under the Attribution-NonCommercial-NoDerivatives 4.0 International. See the LICENSE file for details.
