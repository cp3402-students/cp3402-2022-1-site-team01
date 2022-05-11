
declare filename

case "$1" in

"content") filename="jazztownsville.sql"
;;
"testdata") filename="themetestdata.sql"
;;
*) echo "Invalid argument. Please enter \"content\" or \"testdata\"."
  exit 1
  ;;
esac

../../mysql/bin/mysql.exe jazztownsville < export/$filename -u root

if [ $? != 0 ]; then
  echo "Could not import, Xampp is not running!"
  exit 1
fi

cd wp-content/themes/understrap-child

npm run css
npm run js

echo "Successfully imported WordPress site."