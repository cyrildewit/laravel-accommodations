# Laravel Accommodations

> Open-source booking platform for accomodations

## Copyright

© 2018 Cyril de Wit, All Rights Reserved.

## Specifications

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
* Secure Portal
  * Controllers: `App\Http\Controllers\Secure`
  * Routes file: `routes/web-secure.php`
  * URL: `secure.domain.com`
  * Accessible by: users
  * Pages:
    * Dashboard
    * Bookings
    * Reviews
    * ?(Timeline)
    * Profile
* Listings Portal
  * Controllers: `App\Http\Controllers\Portal`
  * Routes file: `routes/web-portal.php`
  * URL: `portal.domain.com`
  * Accessible by: owners
* Management
  * Controllers: `App\Http\Controllers\Management`
  * Routes file: `routes/web-management.php`
  * URL: `manage.domain.com`
  * Accessible by: employees
