# ot_sitekitcecard

TYPO3 content element for displaying a Bootstrap-style **card**.
Part of the Sitekit ecosystem – integrates seamlessly with `ot-sitekit-base` and
`ot-irrebuttons`.

---

## 🧩 Features

- Responsive **Bootstrap card layout** with `.card`, `.card-body`,
  `.card-img-top`, etc.
- Works independently **or within** the `Card Grid` container (
  `ot-sitekit-base-container-grid-cards`)
- Automatic wrapper handling via fluid layout switching (`NoWrapper` vs.
  `Default`)
- Supports:
- **Headline**, **subheader**, **body text**
- **Image** with optional link
- **IRRE buttons** from `ot-irrebuttons`
- Uses TYPO3's own file reference field (`assets`)

---

## 🧱 Requirements

| Extension                      | Version            |
|--------------------------------|--------------------|
| `typo3/cms-core`               | ^13.4              |
| `oliverthiele/ot-sitekit-base` | *                  |
| `oliverthiele/ot-irrebuttons`  | ^3.2 or `dev-main` |

---

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

The content element **“Card”** automatically appears in the *"New
Content Element"* wizard – with translated title and description.

---

## 🧩 Registration in TYPO3

- New `CType`: `ot_sitekitcecard`
- Icon `ot-sitekit-ce-card` registered in `Configuration/Icons.php`
- Palette `irreButtons` after `bodytext`
- Rich text editor enabled for `bodytext`
- Field `assets` restricted to `jpg,jpeg,png,gif,svg`

---

## 🧠 Template overview

File: `Resources/Private/Templates/Bootstrap5/Templates/CeCard.html`

Uses dynamic layout selection:

```html

<f:layout
    name="{f:if(condition: ‘{directParent.CType} == 'ot-sitekit-base-container-grid-cards’', then: ‘NoWrapper’, else: ‘Default’)}"/>
```

---

## 🧩 Acknowledgements

Developed by [Oliver Thiele](https://www.oliver-thiele.de)
License: **GPL‑2.0‑or‑later**
