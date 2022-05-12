npm run dist
npm run dist-build
cp .github/style.css dist/style.css
rm -r -f ../jazztheme
mv dist ../jazztheme
cd ../jazztheme
sudo rm -r .git
rm LICENSE
rm README.md
rm deployment.md
rm site.md
rm theme.md
cd ../../../  # jazztownsville (wp root)
wp theme activate jazztheme