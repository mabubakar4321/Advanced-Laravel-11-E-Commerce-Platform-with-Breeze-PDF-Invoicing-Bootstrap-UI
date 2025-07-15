# Advanced Laravel 11 E-Commerce Platform with Breeze, PDF Invoicing & Bootstrap UI

This is a complete Laravel 11-based e-commerce web application featuring user authentication with Laravel Breeze, MySQL database integration, a dynamic cart system, admin dashboard, and PDF invoice generation using the `barryvdh/laravel-dompdf` package. The interface is styled with Bootstrap for responsive design, making it ideal for building or learning how to create robust online store platforms.

## Features

- Laravel 11 Framework
- Laravel Breeze Authentication
- MySQL Database
- Admin Dashboard
- Add-to-Cart & Checkout System
- PDF Invoice Download (DOMPDF)
- Bootstrap 5 UI Integration
- HTML/CSS/JS Customization Ready

## Installation

```bash
git clone https://github.com/mabubakar4321/Advanced-Laravel-11-E-Commerce-Platform-with-Breeze-PDF-Invoicing-Bootstrap-UI.git
cd Advanced-Laravel-11-E-Commerce-Platform-with-Breeze-PDF-Invoicing-Bootstrap-UI
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed (if applicable)
php artisan serve
