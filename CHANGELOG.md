# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/).

## [0.3.5] - 2017-09-15

### Added
- Adding more dispatcher events for the app - [#94](https://github.com/owncloud/customgroups/issues/94) [#103](https://github.com/owncloud/customgroups/issues/103)

### Changed
- Add option to prevent duplicate display names - [#82](https://github.com/owncloud/customgroups/issues/82)
- Use event names with namespace - [#102](https://github.com/owncloud/customgroups/issues/102)
- Set min version to 10.0.3 - [#98](https://github.com/owncloud/customgroups/issues/98)
- Align package.json versions with core - [#101](https://github.com/owncloud/customgroups/issues/101)

### Fixed
- Deleting a custom group now properly deletes associated shares [#92](https://github.com/owncloud/customgroups/pull/92)
- Fix member search in member sidebar to use all search fields - [#106](https://github.com/owncloud/customgroups/issues/106)
- Fix closing sidebar, reset selection - [#96](https://github.com/owncloud/customgroups/issues/96)
- Improve spinners in members view - [#97](https://github.com/owncloud/customgroups/issues/97)
- Prevent registering select event twice on autocomplete - [#95](https://github.com/owncloud/customgroups/issues/95)

## [0.3.4] - 2017-07-19

### Added

- Added events for when administrating groups and members - [#74](https://github.com/owncloud/customgroups/issues/74)

### Changed

- "Group admin" is now renamed to "Group owner" - [#67](https://github.com/owncloud/customgroups/issues/67)
- ownCloud administrators now always see "Administrator" as role - [#67](https://github.com/owncloud/customgroups/issues/67)

### Fixed

- Ellipsize long member names - [#78](https://github.com/owncloud/customgroups/issues/78)
- Fix when avatars are disabled - [#68](https://github.com/owncloud/customgroups/issues/68)
- Implement method that returns users in group - [#73](https://github.com/owncloud/customgroups/issues/73)
- Move restriction checkbox to the sharing section - [#72](https://github.com/owncloud/customgroups/issues/72)
- Allow restricting group creation to subadmins - [#70](https://github.com/owncloud/customgroups/issues/70)
- Show settings section above 'additional' in admin - [#65](https://github.com/owncloud/customgroups/issues/65)
- Added enabling of testing app in the setup. - [#71](https://github.com/owncloud/customgroups/issues/71)

## [0.3.1] - 2017-05-22

### Fixed

- Register section for the app in settings - [#62](https://github.com/owncloud/customgroups/issues/62)

## [0.2.0] - 2017-04-18

### Added

- Added notification for removal of membership - [#56](https://github.com/owncloud/customgroups/issues/56)
- Added notification for role changes - [#56](https://github.com/owncloud/customgroups/issues/56)

### Changed

- Simplified notification subject line - [#56](https://github.com/owncloud/customgroups/issues/56)

## [0.1.1] - 2017-03-27

### Added

- Publish notification when adding user - [#28](https://github.com/owncloud/customgroups/issues/28)
- Added member autocomplete - [#43](https://github.com/owncloud/customgroups/issues/43)
- Use display names for members - [#45](https://github.com/owncloud/customgroups/issues/45)
- Adding app category to app info.xml - [#48](https://github.com/owncloud/customgroups/issues/48)

### Fixed

- Fixes spinner issues - [#47](https://github.com/owncloud/customgroups/issues/47)

[Unreleased]: https://github.com/owncloud/customgroups/compare/v0.3.5...master
[0.3.5]: https://github.com/owncloud/customgroups/compare/v0.3.4...v0.3.5
[0.3.4]: https://github.com/owncloud/customgroups/compare/v0.3.1...v0.3.4
[0.3.1]: https://github.com/owncloud/customgroups/compare/v0.2.0...v0.3.1
[0.2.0]: https://github.com/owncloud/customgroups/compare/v0.1.1...v0.2.0
[0.1.1]: https://github.com/owncloud/customgroups/compare/v0.1.0...v0.1.1

