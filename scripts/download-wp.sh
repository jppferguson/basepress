#!/bin/bash

# wordpress directory
WP_DIR="`dirname $0`/../public/wp/"

if [ ! -d $WP_DIR ]; then
  echo "\033[0;31mERROR: ${WP_DIR} doesn't exist"
else
  cd $WP_DIR
  # download latest tar
  echo "\033[0;34mDownloading Wordpress Archive"
  wget https://wordpress.org/latest.tar.gz
  # untar it
  tar -xzf latest.tar.gz --strip-components=1
  # remove tar.gz file
  rm latest.tar.gz
  echo "All Done!"
fi
