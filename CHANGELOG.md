# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [3.0.0] — 2026-07-31

### Changed

- **Breaking:** Drop TYPO3 v13 support, require TYPO3 `^14.3`
- **Breaking:** Raise the PHP minimum to `>=8.4`
- **Breaking:** Require `oliverthiele/ot-irrebuttons ^5.0` and
  `oliverthiele/ot-sitekit-base ^1.0`; the latter replaces the `*` wildcard
- Migrate the language files from XLIFF 1.2 to XLIFF 2.0. Unit identifiers and
  all translations are unchanged, so no label reference needs adjusting
- Reference labels via translation domain mapping instead of full file paths:
  `ot_sitekitcecard.db:` and `core.form.tabs:` replace the verbose `LLL:EXT:`
  references

### Fixed

- `ext_emconf.php` declared the extension key as `ot_cesitekitcecard`, while
  `composer.json` and the TCA use `ot_sitekitcecard`
- The dependency on the base extension was spelled `ot_sitekit_base` in
  `ext_emconf.php`; the extension key is `ot_sitekitbase`, so the constraint
  never applied

---

## [2.0.0] — 2026-04-25

### Added

- TYPO3 v14.3 support (`^13.4||^14.3`)

### Changed

- Raise PHP minimum constraint to `>=8.3`
- Raise `ot-irrebuttons` constraint to `^4.0`
- Drop TYPO3 v12 support

---

## [1.2.1] — 2026-02-10

### Added

- SiteKit configuration for CE card element
- Backend preview renderer for card content element

---

## [1.2.0] — 2026-01-26

### Added

- Support for icon-enhanced card titles
- Flexible icon positioning using CSS Grid:
  - Icon above title
  - Icon above title (centered)
  - Icon inline (left of title)
  - Responsive icon layout (icon top on mobile, inline on desktop)
- Dedicated SCSS component for card title layout

---

## [1.0.0] — 2025-10-10

### Added

- Initial release of the Card content element for TYPO3 SiteKit
- Integration with `ot-irrebuttons` for configurable IRRE button elements
- Works standalone or within the Card Grid container

[Unreleased]: https://github.com/oliverthiele/ot-sitekit-ce-card/compare/v3.0.0...HEAD
[3.0.0]: https://github.com/oliverthiele/ot-sitekit-ce-card/compare/v2.0.0...v3.0.0
[2.0.0]: https://github.com/oliverthiele/ot-sitekit-ce-card/compare/v1.2.1...v2.0.0
[1.2.1]: https://github.com/oliverthiele/ot-sitekit-ce-card/compare/v1.2.0...v1.2.1
[1.2.0]: https://github.com/oliverthiele/ot-sitekit-ce-card/compare/v1.0.0...v1.2.0
[1.0.0]: https://github.com/oliverthiele/ot-sitekit-ce-card/releases/tag/v1.0.0