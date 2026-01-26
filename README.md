# ot-sitekit-ce-card

Extension key: `ot_sitekitcecard`

TYPO3 content element for rendering a **Bootstrap 5 card**. Part of the
**Sitekit ecosystem** -- integrates seamlessly with `ot-sitekit-base`
and `ot-irrebuttons`.

------------------------------------------------------------------------

## 🧩 Features

- Responsive **Bootstrap card layout** with `.card`, `.card-body`,
  `.card-img-top`, etc.
- Works:
    - as a **standalone content element**
    - **inside the Card Grid container**
      (`ot-sitekit-base-container-grid-cards`)
- Automatic wrapper handling via **dynamic Fluid layout selection**
  (`NoWrapper` vs.`Default`)
- Supports:
    - **Header** with optional icon
    - **Subheader**
    - **Body text** (RTE-enabled)
    - **Image** (TYPO3 FAL, optional link)
    - **IRRE buttons** via `ot-irrebuttons`
- Flexible **icon positioning** for card titles:
    - Icon above title
    - Icon above title (centered)
    - Icon inline (left of title)
    - Responsive switching (top → left)

------------------------------------------------------------------------

## 🧱 Requirements

| Extension                      | Version |
|--------------------------------|---------|
| `typo3/cms-core`               | ^13.4   |
| `oliverthiele/ot-sitekit-base` | *       |
| `oliverthiele/ot-irrebuttons`  | ^3.2    |

------------------------------------------------------------------------

## ⚙️ Installation

Via Composer:

```bash
composer require oliverthiele/ot-sitekitcecard
```

When developing with a local `packages/` directory, use a `path`
repository entry.

After installation, clear the TYPO3 caches:

```bash
vendor/bin/typo3 cache:flush
```

The content element **"Card"** appears automatically in the *"New
Content Element"* wizard with translated labels.

------------------------------------------------------------------------

## 🧩 TYPO3 Registration Overview

- CType: `ot_sitekitcecard`
- Icon: `ot-sitekit-ce-card` (registered in `Configuration/Icons.php`)
- RTE enabled for `bodytext`
- File field `assets`
    - Allowed types: `jpg`, `jpeg`, `png`, `gif`, `svg`
- IRRE palette `irreButtons` after `bodytext`

------------------------------------------------------------------------

## 🧠 Template & Rendering Logic

Template file:

    Resources/Private/Templates/Bootstrap5/Templates/CeCard.html

The template dynamically switches its Fluid layout depending on the
parent container:

```html

<f:layout
    name="{f:if(
        condition: '{directParent.CType} == \'ot-sitekit-base-container-grid-cards\'',
        then: 'NoWrapper',
        else: 'Default'
    )}"/>
```

This ensures: - proper grid behavior inside card containers - flush
alignment without nested column wrappers - correct rendering when used
via *Insert record*

------------------------------------------------------------------------

## 🎨 Icon-enhanced Card Titles

Card titles can render an optional icon.

The icon output is delegated to a partial provided by **ot-sitekit-base**.
Depending on your project setup, that partial may render e.g.:

- an `<i>` tag based icon (CSS icon font / classes), or
- a ViewHelper output from `EXT:ot-icons`

In this extension, the title icon is rendered via:

```html

<f:render partial="Icon" section="Main"
          arguments="{iconIdentifier: data.icon_identifier}"/>
```

### Markup structure

```html
<h2 class="h5 card-title ot-cecard-title icon-responsive">
    <span class="ot-cecard-icon">
        <!-- icon output (from ot-sitekit-base partial) -->
    </span>
    <span class="ot-cecard-title-text">
        Card title
    </span>
</h2>
```

### Available modifier classes

Class Behavior
  ------------------- ---------------------------------------
`icon-top`          Icon above title (left aligned)
`icon-top-center`   Icon above title (centered)
`icon-left`         Icon inline, left of title
`icon-responsive`   Icon top on mobile, inline on desktop

The layout is implemented using **CSS Grid** for clarity and
extensibility.

------------------------------------------------------------------------

## 🧩 Related Extensions

- `oliverthiele/ot-sitekit-base`
- `oliverthiele/ot-irrebuttons`

------------------------------------------------------------------------

## 🧩 License & Author

Developed by\
**Oliver Thiele** -- https://www.oliver-thiele.de

License: **GPL-2.0-or-later**
