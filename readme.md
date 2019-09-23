# Cricket Assignment (US Tech Solutions)

# BY RATNESH KUMAR RAI

## Requirment?

- Laravel 5.8
- PHP >= 7.1.3
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Installation?

- Copy Dirctory 
- Create Database 
- Change .env.example to .env
- Composer install
- Run migration/seeders OR Import database dump which is available on root directory

## Migration?

- Yes

## Seeder?

v Yes

## New Directory?

- Helpers (App\Helpers): This is responsible to follow Contract/Implement Architecture
- Models (App\Models)
- Api (App\Http\Controllers\Api)

## Any addition or updation in Files?

- Controllers
- Models
- routes
- resources
- Providers
- config\app.php
- config\database.php
- config\sessions/php
- Middleware\XSS.php

## Security

- Mysql Injection => Use Eloquent ORM
- cross-site request forgery => CSRF enabled
- XSS (clickjacking) => Added XSS class
- HTTPS Only Cookies => Enabled(True) 
- HTTP Access Only => Disabled (False)









