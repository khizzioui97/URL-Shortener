# Laravel Project Setup - URL Shortener

This repository contains a Laravel project template to help you get started quickly with building web applications using the Laravel framework. This project is specifically set up for creating a URL shortener application.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP: Version 7.4 or higher
- Composer: Dependency manager for PHP - [Install Composer](https://getcomposer.org/download/)
- MySQL: A relational database management system - [Install MySQL](https://dev.mysql.com/downloads/)

## Getting Started

Follow these steps to set up and run the project:

1. **Clone the Repository:**
   git clone https://github.com/your-username/laravel-url-shortener.git
   cd laravel-url-shortener
2. Install Composer Dependencies:
   composer install
3. Copy Environment File:
   cp .env.example .env
4. Generate Application Key:
   php artisan key:generate
5. Configure Database:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=urlshortener
    DB_USERNAME=root
    DB_PASSWORD=
6. Run Migrations:
   php artisan migrate
7. Start Development Server:
   php artisan serve


