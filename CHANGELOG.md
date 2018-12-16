# Release Notes

All notable changes to `Laravel Accommodations` will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [v0.3.0] (2018-12-16)

### Added

- Configuration for StyleCI
- Added the `Bookings` Eloquent model to the bookings domain
- Added the `isAvailalbeForPeriod` method to the `Room` Eloquent model
- Added the `isAvailableForDate` method to the `Room` Eloquent model
- Added the `availableForPeriod` scope to the `Room` Eloquent model
- Added the `availableFordate` scope to the `Room` Eloquent model
- Added factories for `Listing`, `Owner` and `Room`

### Changed

- Make `Room` Eloquent model sortable using `spatie/eloquent-sortable`

## [v0.2.0] (2018-12-08)

### Added

- Added the `Owners` Eloquent model to the owners domain
- Added the `BookingController` for management with all basic actions
- Added the `ListingController` for management with all basic actions
- Added the `UserController` for management with all basic actions
- Added the `LoginController` for secure
- Added the `RegisterController` for secure
- Added the `ResetPasswordController` for secure
- Added the `VerificationController` for secure
- Added secure environment to `Authenticate` middleware
- Added secure environment to `RedirectIfAuthenticated` middleware
- Map secure environment routes in `RouteServiceProvider`
- Added secure to auth guards
- Added basic auth routes for management and secure

### Changed

- Updated the guard name of the `User` Eloquent model to `secure`

## [v0.1.0] (2018-12-07)

### Added

- Fresh installation of Laravel 5.7
- Added the `Address` Eloquent model to the addresses domain
- Added the `Listing` Eloquent model to the listings domain
- Added the `ListingType` enum tot the listings domain
- Added the `Room` Eloquent model to the listings domain
- Added the `Location` Eloquent model to the locations domain
- Added the `Manager` Eloquent model to the managers domain
- Added the `User` Eloquent model to the users domain
- Added the `CreateUser` action to the users domain
- Added auth guards for each environment
- Splitted the routes into different files and load them in the `RouteServiceProvider`
- Created seeds for almost all Eloquent models

[Unreleased]: https://github.com/cyrildewit/laravel-accommodations/compare/v0.3.0...HEAD
[v0.3.0]: https://github.com/cyrildewit/laravel-accommodations/compare/v0.2.0...v0.3.0
[v0.2.0]: https://github.com/cyrildewit/laravel-accommodations/compare/v0.1.0...v0.2.0
