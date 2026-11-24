# Corner Shop Stock

A stock and sales dashboard for a small shop.

Maintain a small product catalog, record sales, adjust stock, and spot products below their reorder threshold. The dashboard summarizes stock and sales activity.

## Features
- User registration and sign-in with session security.
- Authenticated dashboard and responsive Blade UI.
- CRUD workflows with server-side validation.
- SQLite-ready local setup and feature tests.

## Requirements and setup
PHP 8.2+, Composer 2.
```bash
cp .env.example .env
composer install
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```
Open `/register` to create a demo user. Use fictional data only. This portfolio sample is not hardened for production use.

## Tests
```bash
php artisan test
```

The preview is illustrative static SVG, not a screenshot of a running application.
