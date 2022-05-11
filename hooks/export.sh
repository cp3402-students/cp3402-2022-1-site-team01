
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

../../mysql/bin/mysqldump.exe jazztownsville > export/$filename -u root

if [ $? != 0 ]; then
  echo "Could not export, Xampp is not running!"
  git restore export/$filename
  exit 1
fi

echo "Successfully exported WordPress site."