# Laravel Accommodations

> **cyrildewit/laravel-accommodations**

## Project Overall Requirements

### Overview

The goal is to build a simple booking system for local accommodations. The application will be medium-sized and it targets small municipalities.

### Technical

The final application needs to consists of different environments. For instance an environment for admins, webmasters, customer-service employees and of course users. These enviroments should be divided into abstract domains.

## Project Specific Information

### Environments

* Front
  * Controllers: `App\Http\Controllers\Front`
  * Routes file: `routes/web-front.php`
  * URL: `domain.com`
  * Accessible by: everyone (guests)
* Accommodations Portal
  * Controllers: `App\Http\Controllers\Portal`
  * Routes file: `routes/web-portal.php`
  * URL: `my.domain.com`
  * Accessible by: users
* Management
  * Controllers: `App\Http\Controllers\Management`
  * Routes file: `routes/web-management.php`
  * URL: `manage.domain.com`
  * Accessible by: employees
