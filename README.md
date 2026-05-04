# PTA Blocks

Block theme for [PropertyTaxAppealGuides.com](https://propertytaxappealguides.com).

## Stack

- WordPress block theme (FSE)
- theme.json for design tokens
- Plain CSS (no build step, no Tailwind)
- Companion plugin: [pta-core](https://github.com/billhector/pta-core)

## Local development

Built and tested on Local-by-Flywheel with PHP 8.4. Production: Dreamhost VPS.

## Deploy

GitHub Actions → Dreamhost VPS via SSH/rsync. See `.github/workflows/deploy.yml` (added in Plan E).
