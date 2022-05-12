npm run dist
npm run dist-build
rm -r -f ../jazztheme
mv dist ../jazztheme
cp .github/style.css style.css
cd ../../../  # jazztownsville (wp root)
wp theme activate jazztheme