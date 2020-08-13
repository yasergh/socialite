# Release Notes

## [Unreleased](https://github.com/laravel/socialite/compare/v4.4.1...4.0)


## [v4.4.1 (2020-06-03)](https://github.com/laravel/socialite/compare/v4.4.1...v4.4.1)

### Fixed
- Fix containter call ([#450](https://github.com/laravel/socialite/pull/450))


## [v4.4.0 (2020-06-02)](https://github.com/laravel/socialite/compare/v4.3.2...v4.4.0)

### Added
- Support Guzzle 7 ([#449](https://github.com/laravel/socialite/pull/449))

### Removed
- Remove guzzlehttp/guzzle ~5.0 workaround ([#448](https://github.com/laravel/socialite/pull/448))


## [v4.3.2 (2020-02-04)](https://github.com/laravel/socialite/compare/v4.3.1...v4.3.2)

### Fixed
- Use Authorization header for Github provider ([#430](https://github.com/laravel/socialite/pull/430))


## [v4.3.1 (2019-11-26)](https://github.com/laravel/socialite/compare/v4.3.0...v4.3.1)

### Fixed
- Override `SocialiteServiceProvider::isDeferred()` to mark as deferred ([#412](https://github.com/laravel/socialite/pull/412))


## [v4.3.0 (2019-11-19)](https://github.com/laravel/socialite/compare/v4.2.0...v4.3.0)

### Added
- Allow to manually set desired Facebook graph version ([#408](https://github.com/laravel/socialite/pull/408))

### Changed
- Change default Facebook graph version to 3.3 ([#408](https://github.com/laravel/socialite/pull/408))


## [v4.2.0 (2019-09-03)](https://github.com/laravel/socialite/compare/v4.1.4...v4.2.0)

### Added
- Laravel 6.0 support ([#390](https://github.com/laravel/socialite/pull/390))


## [v4.1.4 (2019-07-30)](https://github.com/laravel/socialite/compare/v4.1.3...v4.1.4)

### Changed
- Updated version constraints for Laravel 6.0 ([3fe71f1](https://github.com/laravel/socialite/commit/3fe71f1c593967e5b6046977b310e287f40ee92d))


## [v4.1.3 (2019-04-02)](https://github.com/laravel/socialite/compare/v4.1.2...v4.1.3)

### Fixed
- Fix bug with no LinkedIn email addresses ([#355](https://github.com/laravel/socialite/pull/355))


## [v4.1.2 (2019-03-15)](https://github.com/laravel/socialite/compare/v4.1.1...v4.1.2)

### Fixed
- Use proper key name for original avatar in Google Provider ([5ec0024](https://github.com/laravel/socialite/commit/5ec0024284d15df527376ced59b9e7b393f6f88b))


## [v4.1.1 (2019-03-12)](https://github.com/laravel/socialite/compare/v4.1.0...v4.1.1)

### Fixed
- Update Google API urls ([#346](https://github.com/laravel/socialite/pull/346))


## [v4.1.0 (2019-02-14)](https://github.com/laravel/socialite/compare/v4.0.3...v4.1.0)

### Added
- Laravel 5.8 support ([32b5ecf](https://github.com/laravel/socialite/commit/32b5ecf537648759bbb90dec8298424477c14f19))

### Fixed
- Handle Google responses excluding 'name' ([#340](https://github.com/laravel/socialite/pull/340))


## [v4.0.3 (2019-01-21)](https://github.com/laravel/socialite/compare/v4.0.2...v4.0.3)

### Fixed
- Use proper localized name ([#329](https://github.com/laravel/socialite/pull/329))


## [v4.0.2 (2019-01-21)](https://github.com/laravel/socialite/compare/v4.0.1...v4.0.2)

### Fixed
- Fix a bug with no LinkedIn image ([81adfcc](https://github.com/laravel/socialite/commit/81adfcc4f7df3a470cdab8a500db77c0de5d01a3))


## [v4.0.1 (2018-12-20)](https://github.com/laravel/socialite/compare/v4.0.0...v4.0.1)

### Fixed
- Fixed broken `GoogleProvider` ([#316](https://github.com/laravel/socialite/pull/316))


## [v4.0.0 (2018-12-18)](https://github.com/laravel/socialite/compare/v3.2.0...v4.0.0)

### Changed
- Removed support for PHP 7.0 ([#311](https://github.com/laravel/socialite/pull/311))
- Require Laravel 5.7 as minimum version ([#311](https://github.com/laravel/socialite/pull/311))

### Fixed
- Fixed and updated the broken LinkedIn provider ([#310](https://github.com/laravel/socialite/pull/310))
