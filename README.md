# VeronaJobs

Marketing site and WordPress theme for the VeronaJobs job placement brand. The repo includes the original static mockup plus a WordPress theme with a Gutenberg-friendly Job post type, archive, single template, and landing page pattern.

## What’s inside
- Static prototype: `index.html`, `style.css`, `script.js` for quick visual reference or local mock review.
- WordPress theme: `wp-content/themes/veronajobs/` with templates, assets, and a Job CPT implementation; see the theme README for full instructions.
- Assets live under `wp-content/themes/veronajobs/assets/` (CSS, JS, images) and mirror the static prototype where possible.

## Use with WordPress
1. Copy `wp-content/themes/veronajobs` into your WordPress install and activate it.
2. Set a static front page (or insert the “VeronaJobs Landing” block pattern on a new page) to mirror the marketing layout.
3. Create Job posts via **Jobs → Add New**, add a featured image, and use Gutenberg blocks for content. The archive lives at `/jobs`.
4. Assign a primary menu; the theme falls back to anchor links for the landing sections if none is set.

## Static preview
- Open `index.html` in a browser to preview the design without WordPress. It uses CDN Google Fonts and Font Awesome for typography/icons.

## Notes
- The theme README (`wp-content/themes/veronajobs/README.md`) covers template mapping, taxonomy usage, and content tips.
- Customize styling in `wp-content/themes/veronajobs/assets/css/main.css`; mobile menu/scroll behavior is in `assets/js/main.js`.
