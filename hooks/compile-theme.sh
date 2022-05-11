rm -r wp-content/themes/jazztownsville -f
cd wp-content/themes/understrap-child
npm run css
npm run js
npm run dist-build
mv dist ../jazztownsville
cd ../../../  # jazztownsville (wp root)
cp screenshot.png wp-content/themes/jazztownsville/screenshot.png
cat <<EOT > wp-content/themes/jazztownsville/style.css
/*
Theme Name:   Jazz Townsville
Theme URI:    https:/www.pccasegear.com
Description:  Theme for Jazz Townsville website.
Author:       Gauvan and the Boys
Author URI:   https://github.com/cp3402-students/cp3402-2022-1-site-team01
Version:      1.1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  jazztownsville
Tags: jazz
GitHub Theme URI: cp3402-students/cp3402-2022-1-site-team01
*/
EOT
wp theme activate jazztownsville