#!/bin/bash

# public directory
APP_DIR="`dirname $0`/../public/app/"

# colours
cNo=`tput sgr0`; cRed=`tput setaf 1`; cGreen=`tput setaf 2`; cBlue=`tput setaf 4`

if [ ! -d $APP_DIR ]; then
  echo $cRed "ERROR: ${APP_DIR} doesn't exist"
  exit 1
else
  cd $APP_DIR
  echo "Setting permissions:" $cBlue

  echo "  Change directory permissions to 755"
  find . -type d -exec chmod 755 {} \;  # Change directory permissions rwxr-xr-x

  echo "  Changing file permissions to 644"
  find . -type f -exec chmod 644 {} \;  # Change file permissions rw-r--r--

  echo $cGreen "All Done!"
fi
