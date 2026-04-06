# Design System — Ramen en Poorten Onderhoud
> Gegenereerd via UI/UX Pro Max reasoning rules

## Industrie match
Home services / onderhoud — lokale dienstverlener, vertrouwen en professionaliteit centraal.

## Design referenties
- **Apple** → clean minimalism, witruimte als designelement, strak sectie-ritme, één accentkleur
- **Airbnb** → warmte, zachte multi-layer shadows, fotografie-first, genereuze border-radius, near-black tekst
- **awesome-design-md** → DESIGN.md structuur (9 secties) als kwaliteitsstandaard

## Stijl
**Clean Minimalism + Warm Service UI**
- witruimte als designelement (Apple-stijl: elke sectie ademt)
- zachte multi-layer schaduwen (Airbnb: border ring + soft blur + harder blur)
- near-black tekst (#222222) in plaats van puur zwart — warmer, vriendelijker
- fotografie-gedreven hero secties
- één CTA-kleur als enige chromatic accent (Apple-principe)

## Kleurenpalet

| Token | Kleur | Hex | Gebruik |
|-------|-------|-----|---------|
| Primary | Donker staalblauw | #2C3E50 | Koppen, navigatie, footer |
| Secondary | Licht grijsblauw | #ECF0F1 | Achtergronden, secties |
| CTA | Sterk oranje | #E67E22 | Knoppen, actie-elementen |
| CTA hover | Donker oranje | #D35400 | Hover states |
| Background | Wit | #FFFFFF | Hoofdachtergrond |
| Surface | Lichtgrijs | #F8F9FA | Kaarten, formulieren |
| Text | Antraciet | #2D3436 | Bodytekst |
| Text muted | Middengrijs | #636E72 | Subtekst, labels |
| Success | Groen | #27AE60 | Bevestigingen |
| Border | Lichtgrijs | #DFE6E9 | Scheidingslijnen |

```css
:root {
  --color-primary: #2C3E50;
  --color-secondary: #ECF0F1;
  --color-cta: #E67E22;
  --color-cta-hover: #D35400;
  --color-bg: #FFFFFF;
  --color-surface: #F8F9FA;
  --color-text: #2D3436;
  --color-text-muted: #636E72;
  --color-success: #27AE60;
  --color-border: #DFE6E9;
}
```

## Typografie

| Rol | Font | Gewicht | Grootte |
|-----|------|---------|---------|
| Heading | Poppins | 600 (semibold) | 32-48px |
| Subheading | Poppins | 500 (medium) | 20-24px |
| Body | Inter | 400 (regular) | 16-18px |
| Small | Inter | 400 | 14px |
| CTA button | Poppins | 600 | 16px |

```css
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500&display=swap');

:root {
  --font-heading: 'Poppins', system-ui, sans-serif;
  --font-body: 'Inter', system-ui, sans-serif;
  --line-height-body: 1.6;
  --line-height-heading: 1.2;
}
```

## Componenten

### Hero
- breed beeld (ramen of poort, professioneel gefotografeerd)
- overlay met kop + subtekst + CTA-knop
- max 2 CTA's: primair (offerte) + secundair (diensten bekijken)

### Service cards
- icoon (SVG, Lucide of Heroicons) + titel + korte tekst
- zachte schaduw: `box-shadow: 0 2px 8px rgba(0,0,0,0.08)`
- hover: lichte lift `transform: translateY(-2px)`
- border-radius: 12px

### Trust bar
- 4 voordelen naast elkaar (icoon + kort label)
- achtergrondkleur: surface (#F8F9FA)
- geen animatie, directe zichtbaarheid

### FAQ
- accordion met + / - icoon
- zachte open/sluit transitie (200ms ease)
- border-bottom scheiding

### CTA blok
- achtergrond: primary (#2C3E50)
- tekst: wit
- knop: CTA oranje
- vol breedte

### Contactformulier
- gestapelde velden
- labels boven de velden
- submit knop: CTA oranje, full-width op mobiel
- succes feedback na verzending

## Effecten
- Transities: 200ms ease-in-out
- Hover op knoppen: kleurverschuiving + lichte schaduw
- Scroll: geen parallax, geen zware animaties
- prefers-reduced-motion: respecteren

## Anti-patterns (vermijden)
- geen neon of felle kleuren
- geen stockfoto's met duimen omhoog
- geen animaties op hero tekst
- geen meer dan 2 lettertypes
- geen emoji als iconen
- geen autoplay video
- geen dark mode (niet nodig voor deze doelgroep)

## Responsive breakpoints

| Naam | Breedte | Aanpak |
|------|---------|--------|
| Mobile | 375px | Stapeling, full-width CTA, hamburgermenu |
| Tablet | 768px | 2-koloms grid voor services |
| Desktop | 1024px | Volledige layout, sidebar navigatie optioneel |
| Wide | 1440px | Max-width container, gecentreerd |

## Pre-delivery checklist
- [ ] Contrast ratio 4.5:1 op alle tekst
- [ ] cursor-pointer op alle klikbare elementen
- [ ] Hover states met 200ms transitie
- [ ] Focus states zichtbaar voor toetsenbordnavigatie
- [ ] ARIA labels op icon-only knoppen
- [ ] 375px mobiel getest
- [ ] 768px tablet getest
- [ ] 1024px desktop getest
- [ ] Afbeeldingen in WebP formaat
- [ ] font-display: swap op alle fonts
- [ ] Geen layout shift bij font laden
- [ ] Loading states op formulier
- [ ] Error states duidelijk en bruikbaar
- [ ] Succes feedback na formulierverzending
- [ ] Lege states ontworpen
