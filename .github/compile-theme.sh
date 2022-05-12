npm run dist
npm run dist-build
cp .github/style.css dist/style.css
rm -r -f ../jazztheme
mv dist ../jazztheme
cd ../jazztheme
cd ../../../  # jazztownsville (wp root)
wp theme activate jazztheme