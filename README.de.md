# ot_sitekitcecard

TYPO3-Inhaltselement zur Darstellung einer **Karte** im Bootstrap-Stil.
Teil des Sitekit-Ökosystems – integriert sich nahtlos mit `ot-sitekit-base` und
`ot-irrebuttons`.

---

## 🧩 Funktionen

- Responsives **Bootstrap-Card-Layout** mit `.card`, `.card-body`,
  `.card-img-top` usw.
- Funktioniert eigenständig **oder innerhalb** des Containers `Card Grid` (
  `ot-sitekit-base-container-grid-cards`)
- Automatische Wrapper-Behandlung über Fluid-Layout-Umschaltung (`NoWrapper` vs.
  `Default`)
- Unterstützt:
    - **Überschrift**, **Subheader**, **Bodytext**
    - **Bild** mit optionalem Link
    - **IRRE Buttons** aus `ot-irrebuttons`
- Verwendet das TYPO3‑eigene Dateireferenz-Feld (`assets`)

---

## 🧱 Voraussetzungen

| Extension                      | Version              |
|--------------------------------|----------------------|
| `typo3/cms-core`               | ^13.4                |
| `oliverthiele/ot-sitekit-base` | *                    |
| `oliverthiele/ot-irrebuttons`  | ^3.2 oder `dev-main` |

---

## ⚙️ Installation

Über Composer:

```bash
composer require oliverthiele/ot-sitekitcecard
```

Bei Entwicklung mit lokalem `packages/`‑Verzeichnis einen `path`
‑Repository‑Eintrag verwenden.

Nach der Installation TYPO3‑Caches leeren:

```bash
vendor/bin/typo3 cache:flush
```

Das Inhaltselement **„Karte“** erscheint automatisch im Wizard *„Neues
Inhaltselement“* – mit übersetztem Titel und Beschreibung.

---

## 🧩 Registrierung in TYPO3

- Neues `CType`: `ot_sitekitcecard`
- Icon `ot-sitekit-ce-card` registriert in `Configuration/Icons.php`
- Palette `irreButtons` nach `bodytext`
- Rich‑Text‑Editor für `bodytext` aktiviert
- Feld `assets` auf `jpg,jpeg,png,gif,svg` beschränkt

---

## 🧠 Template‑Übersicht

Datei: `Resources/Private/Templates/Bootstrap5/Templates/CeCard.html`

Verwendet dynamische Layoutauswahl:

```html

<f:layout
    name="{f:if(condition: '{directParent.CType} == 'ot-sitekit-base-container-grid-cards'', then: 'NoWrapper', else: 'Default')}"/>
```

---

## 🧩 Danksagung

Entwickelt von [Oliver Thiele](https://www.oliver-thiele.de)
Lizenz: **GPL‑2.0‑or‑later**
