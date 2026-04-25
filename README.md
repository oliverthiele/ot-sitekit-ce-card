# OT SiteKit CE Card — TYPO3 Content Element

Bootstrap 5 card content element for TYPO3 v13 and v14. Part of
the [SiteKit ecosystem](https://packagist.org/packages/oliverthiele/ot-sitekit-base).

[![TYPO3](https://img.shields.io/badge/TYPO3-13.4%20%7C%2014.3-orange.svg)](https://typo3.org/)
[![Packagist Version](https://img.shields.io/packagist/v/oliverthiele/ot-sitekit-ce-card.svg)](https://packagist.org/packages/oliverthiele/ot-sitekit-ce-card)
[![PHP](https://img.shields.io/packagist/dependency-v/oliverthiele/ot-sitekit-ce-card/php.svg)](https://php.net/)
[![License](https://img.shields.io/packagist/l/oliverthiele/ot-sitekit-ce-card.svg)](LICENSE)
[![Changelog](https://img.shields.io/badge/Changelog-CHANGELOG.md-blue.svg)](CHANGELOG.md)

---

## Features

- **Bootstrap 5 card layout** — `.card`, `.card-body`, `.card-img-top`
- **Standalone or grid** — works as a standalone content element or inside a
  Card Grid container (`ot-sitekit-base-container-grid-cards`)
- **Dynamic layout selection** — automatically switches between `NoWrapper` and
  `Default` Fluid layout depending on the parent container
- **Header** with optional icon, subheader, body text (RTE), image (FAL,
  optional link)
- **IRRE buttons** via `ot-irrebuttons`
- **Flexible icon positioning** — above title, above title (centered), inline
  left, or responsive (top on mobile, inline on desktop)
- **Backend preview renderer** — card preview directly in the TYPO3 page module

---

## Requirements

| Package                        | Version          |
|--------------------------------|------------------|
| `typo3/cms-core`               | `^13.4 \| ^14.3` |
| PHP                            | `>=8.3`          |
| `oliverthiele/ot-sitekit-base` | `*`              |
| `oliverthiele/ot-irrebuttons`  | `^4.0`           |

---

## Installation

```bash
composer require oliverthiele/ot-sitekit-ce-card
```

The content element **Card** appears automatically in the *New Content Element*
wizard.

---

## Icon positioning

Card titles support an optional icon. The layout is controlled via CSS modifier
classes:

| Class             | Behaviour                             |
|-------------------|---------------------------------------|
| `icon-top`        | Icon above title (left-aligned)       |
| `icon-top-center` | Icon above title (centred)            |
| `icon-left`       | Icon inline, left of title            |
| `icon-responsive` | Icon top on mobile, inline on desktop |

Icon output is delegated to the `Icon` partial provided by `ot-sitekit-base`.

---

## License

GPL-2.0-or-later — see [LICENSE](LICENSE)

## Author

Oliver Thiele — [oliver-thiele.de](https://www.oliver-thiele.de)
