#!/usr/bin/sh

rm export/jazztownsville.sql -f

../../mysql/bin/mysqldump.exe jazztownsville > export/jazztownsville.sql -u root

if [ $? != 0 ]; then
  echo "Could not export, Xampp is not running!"
  git restore export/jazztownsville.sql
  exit 1
fi

echo "Successfully exported WordPress site."