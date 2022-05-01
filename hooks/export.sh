#!/usr/bin/bash

rm export/* -f

../../php/php.exe wp-cli.phar export --dir=export

if [ $? != 0 ]; then
  echo "Could not export, Xampp is not running!"
  exit 1
fi

echo "Successfully exported WordPress site."