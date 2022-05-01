#!/usr/bin/bash

post_types=("post" "page" "attachment" "revision" "nav_menu_item" "custom_css" "customize_changeset" "oembed_cache" "user_request" "wp_block" "wp_template" "wp_template_part" "wp_global_styles" "wp_navigation")
wp post-type list > /dev/null
if [ $? != 0 ]; then
  echo "Could not import, Xampp is not running!"
  exit 1
fi
for post_type in ${post_types[@]}; do
  ids=$(wp post list --post_type=$post_type --format=ids)
  if [ -n $ids ]; then
    wp post delete ids --force
  fi

echo "Successfully imported WordPress site."