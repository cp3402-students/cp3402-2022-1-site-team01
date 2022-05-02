../../mysql/bin/mysql.exe jazztownsville < export/jazztownsville.sql -u root

if [ $? != 0 ]; then
  echo "Could not import, Xampp is not running!"
  exit 1
fi

echo "Successfully imported WordPress site."