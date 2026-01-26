# ot-sitekit-ce-card

Extension-Key: `ot_sitekitcecard`

TYPO3-Inhaltselement zur Darstellung einer **Bootstrap 5 Karte**. Teil des
**Sitekit-Ökosystems** – integriert sich nahtlos mit `ot-sitekit-base` und
`ot-irrebuttons`.

------------------------------------------------------------------------

## 🧩 Funktionen

- Responsives **Bootstrap-Card-Layout** mit `.card`, `.card-body`,
  `.card-img-top` usw.
- Funktioniert:
    - als **eigenständiges Inhaltselement**
    - **innerhalb des Card Grid Containers**
      (`ot-sitekit-base-container-grid-cards`)
- Automatische Wrapper-Behandlung über **dynamische Fluid-Layout-Auswahl**
  (`NoWrapper` vs. `Default`)
- Unterstützt:
    - **Überschrift** mit optionalem Icon
    - **Subheader**
    - **Bodytext** (RTE-aktiviert)
    - **Bild** (TYPO3 FAL, optionaler Link)
    - **IRRE Buttons** via `ot-irrebuttons`
- Flexible **Icon-Positionierung** für Kartentitel:
    - Icon über Titel
    - Icon über Titel (zentriert)
    - Icon inline (links vom Titel)
    - Responsive Umschaltung (oben → links)

------------------------------------------------------------------------

## 🧱 Voraussetzungen

| Extension                      | Version |
|--------------------------------|---------|
| `typo3/cms-core`               | ^13.4   |
| `oliverthiele/ot-sitekit-base` | *       |
| `oliverthiele/ot-irrebuttons`  | ^3.2    |

------------------------------------------------------------------------

## ⚙️ Installation

Über Composer:

```bash
composer require oliverthiele/ot-sitekitcecard
```

Bei Entwicklung mit lokalem `packages/`-Verzeichnis einen `path`-Repository-Eintrag
verwenden.

Nach der Installation TYPO3-Caches leeren:

```bash
vendor/bin/typo3 cache:flush
```

Das Inhaltselement **„Karte"** erscheint automatisch im Wizard *„Neues
Inhaltselement"* – mit übersetztem Titel und Beschreibung.

------------------------------------------------------------------------

## 🧩 Registrierung in TYPO3

- CType: `ot_sitekitcecard`
- Icon: `ot-sitekit-ce-card` (registriert in `Configuration/Icons.php`)
- RTE für `bodytext` aktiviert
- Dateifeld `assets`
    - Erlaubte Typen: `jpg`, `jpeg`, `png`, `gif`, `svg`
- IRRE-Palette `irreButtons` nach `bodytext`

------------------------------------------------------------------------

## 🧠 Template & Rendering-Logik

Template-Datei:

    Resources/Private/Templates/Bootstrap5/Templates/CeCard.html

Das Template schaltet dynamisch sein Fluid-Layout abhängig vom
übergeordneten Container um:

```html

<f:layout
    name="{f:if(
        condition: '{directParent.CType} == \'ot-sitekit-base-container-grid-cards\'',
        then: 'NoWrapper',
        else: 'Default'
    )}"/>
```

Dies gewährleistet:
- korrektes Grid-Verhalten innerhalb von Card-Containern
- bündige Ausrichtung ohne verschachtelte Spalten-Wrapper
- korrektes Rendering bei Verwendung via *Datensatz einfügen*

------------------------------------------------------------------------

## 🎨 Icons in Kartentiteln

Kartentitel können ein optionales Icon darstellen.

Die Icon-Ausgabe wird an ein Partial delegiert, das von **ot-sitekit-base**
bereitgestellt wird. Je nach Projekt-Setup kann dieses Partial z. B. Folgendes
rendern:

- ein `<i>`-Tag-basiertes Icon (CSS-Icon-Font / Klassen), oder
- eine ViewHelper-Ausgabe von `EXT:ot-icons`

In dieser Extension wird das Titel-Icon wie folgt gerendert:

```html

<f:render partial="Icon" section="Main"
          arguments="{iconIdentifier: data.icon_identifier}"/>
```

### Markup-Struktur

```html
<h2 class="h5 card-title ot-cecard-title icon-responsive">
    <span class="ot-cecard-icon">
        <!-- Icon-Ausgabe (aus ot-sitekit-base Partial) -->
    </span>
    <span class="ot-cecard-title-text">
        Kartentitel
    </span>
</h2>
```

### Verfügbare Modifier-Klassen

Klasse              Verhalten
------------------- ---------------------------------------
`icon-top`          Icon über Titel (linksbündig)
`icon-top-center`   Icon über Titel (zentriert)
`icon-left`         Icon inline, links vom Titel
`icon-responsive`   Icon oben auf Mobil, inline auf Desktop

Das Layout ist mit **CSS Grid** für Klarheit und Erweiterbarkeit implementiert.

------------------------------------------------------------------------

## 🧩 Verwandte Extensions

- `oliverthiele/ot-sitekit-base`
- `oliverthiele/ot-irrebuttons`

------------------------------------------------------------------------

## 🧩 Lizenz & Autor

Entwickelt von\
**Oliver Thiele** – https://www.oliver-thiele.de

Lizenz: **GPL-2.0-or-later**
