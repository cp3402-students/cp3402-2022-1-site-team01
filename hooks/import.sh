#!/usr/bin/sh

types_string=$(../../php/php.exe wp-cli.phar post-type list --field=name)

if [ $? != 0 ]; then
  echo "Could not import, Xampp is not running!"
  exit 1
fi
# Convert to array
types=($types_string)

for post_type in "${types[@]}"; do
  ids=$(../../php/php.exe wp-cli.phar post list --post_type=$post_type --format=ids)
  if [ -n "$ids" ]; then
    ../../php/php.exe wp-cli.phar post delete $ids --force
  fi
done

../../php/php.exe wp-cli.phar plugin activate wordpress-importer
../../php/php.exe wp-cli.phar import export --authors=create
../../php/php.exe wp-cli.phar theme activate understrap-child

echo "Successfully imported WordPress site."