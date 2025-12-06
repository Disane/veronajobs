# VeronaJobs WordPress Theme

This theme ports the static VeronaJobs landing page into WordPress with a custom **Job** post type, reusable block pattern, and templates for job listings.

## Getting Started
1. Copy the `veronajobs` theme folder into `wp-content/themes/`.
2. Activate **VeronaJobs** from **Appearance → Themes**.
3. Assign a **Primary Menu** under **Appearance → Menus** (anchors for About, Services, Candidates, and Contact are already wired as a fallback).
4. Set the static front page to use the built-in layout via **Settings → Reading → Your homepage displays → A static page** and select a new page using the VeronaJobs block pattern (below), or leave the default front page template.

## Assets
* Styles: `assets/css/main.css` (also loaded in the block editor for visual parity)
* Scripts: `assets/js/main.js` (mobile menu + navbar scroll state)
* Images: place brand/hero/gallery assets in `assets/images/` and reference them via the Media Library.

## Creating Job Posts
1. Go to **Jobs → Add New**.
2. Enter a title, featured image, and use Gutenberg blocks for the description, requirements, benefits, and gallery.
3. Set **Job Categories** and **Job Locations** (hierarchical taxonomies) from the sidebar to help visitors filter roles.
4. Publish. The job will render with the **single-job.php** template and appear on the **/jobs** archive.

### Suggested Content Structure (sample)
* Hero/Introduction: “Csatlakozz prémium partnerünkhöz mint Senior HR Generalista.”
* Highlights list: responsibilities, required experience, language skills.
* Benefits: e.g., cafeteria, hybrid work, szolgálati autó.
* Gallery: add two–three images (office, team, brand) for visual context.

## Using the Job Landing Pattern
1. Create a new Page and open it in the block editor.
2. Insert the **VeronaJobs Landing** pattern from the *Patterns → VeronaJobs* category.
3. Replace placeholder texts and gallery prompts with your content and images.
4. Update call-to-action links if you prefer different anchors or forms.

## Screenshots/Preview Guidance
* After customizing a page or job, use WordPress’s built-in preview (top-right “Preview” button) to generate a browser preview; capture screenshots with your OS tools for documentation.
* For best parity with the design, ensure Google Fonts and Font Awesome are accessible (they are enqueued by the theme).

## How to Add Media
1. Upload images to **Media → Add New**.
2. When editing a page/job, use **Add Media** or the **Image/Gallery** blocks to place photos. The block pattern already includes a simple gallery column layout you can replace with real images.

## Customization Notes
* Navigation: set a custom logo in **Appearance → Customize**; the fallback text shows the site title.
* Colors/typography: adjust in `assets/css/main.css` or override via additional CSS in the Customizer.
* Scripts: mobile menu toggle expects the primary menu to carry the `nav-menu` class (set by default).

## File Map
* `front-page.php` – landing layout with hero, about, services, candidates, and contact sections.
* `archive-job.php` / `single-job.php` – Gutenberg-first templates for the Job post type.
* `patterns/job-landing.php` – reusable block layout mirroring the source page sections (hero, description, services, benefits, gallery).
