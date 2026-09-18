=== Northview Property Management Theme ===

CONTENTS
- style.css        : theme header + full CSS (design system: navy #0d1b2a / gold #e8b84b)
- functions.php     : theme setup, menus, Customizer options (hero/getaway text + images), newsletter AJAX handler
- header.php        : site header & primary navigation
- footer.php         : footer with 3 menu columns + newsletter form
- front-page.php     : the homepage template (Hero, "We Handle Everything", diamond gallery, Featured Getaway)
- index.php          : fallback blog/archive template
- assets/js/main.js  : newsletter form submit via AJAX
- assets/images/     : hero.svg, getaway.svg, gallery-1..4.svg (vector placeholder art in the same navy/gold palette
                        as the design — no internet download was available in this environment, so these are
                        generated placeholders, not stock photography)

INSTALLATION
1. Zip the "northview-theme" folder (or use the .zip already provided).
2. In WordPress admin: Appearance > Themes > Add New > Upload Theme > choose the zip > Install > Activate.
3. Appearance > Menus: create a menu, assign it to "Primary Menu" location (and optionally the
   three footer menu locations: Footer - Company / Services / Destinations).
4. Appearance > Customize > "Hero Section" and "Featured Getaway Section": replace the placeholder
   background images with your own real photography, and edit headline/price/rating text.
5. Settings > General: set Site Title to "Northview" (or your brand) for the logo text.
6. Optional: Appearance > Customize > Site Identity > upload a custom logo image to replace the icon+text logo.

REPLACING THE PLACEHOLDER IMAGES WITH REAL PHOTOS
Go to Appearance > Customize > Hero Section / Featured Getaway Section and use the image upload
control to swap in real property photography. For the 4 small gallery diamonds, replace the files
assets/images/gallery-1.svg ... gallery-4.svg with your own photos of the same file name (jpg/png
also work — front-page.php just needs the file names updated if you change the extension).

NOTES
- No plugins are required; the theme is self-contained.
- The newsletter form posts to WordPress's built-in admin-ajax.php; hook into the
  `northview_newsletter_signup` action in functions.php to connect it to Mailchimp/ConvertKit/etc.
