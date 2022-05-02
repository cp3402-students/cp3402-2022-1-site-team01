rm -r wp-content/themes/jazztownsville -f
cd wp-content/themes/understrap-child
npm run css
npm run js
npm run dist-build
mv dist ../jazztownsville
cd ../../../  # jazztownsville (wp root)
cat <<EOT > wp-content/themes/style.css
/*
Theme Name:   Jazz Townsville
Theme URI:    https://understrap.com
Description:  Theme for Jazz Townsville website.
Author:       Gauvan and the Boys
Author URI:   https://github.com/understrap/understrap-child/graphs/contributors
Template:     understrap
Version:      1.1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  understrap-child
Tags: one-column, custom-menu, featured-images, theme-options, translation-ready
GitHub Theme URI: understrap/understrap-child
*/
EOT
wp theme activate jazztownsville