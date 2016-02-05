#!/bin/bash

# wordpress directory
WP_DIR="`dirname $0`/../public/wp/"

# colours
cNo=`tput sgr0`; cRed=`tput setaf 1`; cGreen=`tput setaf 2`; cBlue=`tput setaf 4`

if [ ! -d $WP_DIR ]; then
  echo $cRed "ERROR: ${WP_DIR} doesn't exist"
else
  cd $WP_DIR

  # download latest tar
  echo $cBlue "Downloading WordPress Archive" $cNo
  wget https://wordpress.org/latest.tar.gz

  # untar it
  tar -xzf latest.tar.gz --strip-components=1

  # remove tar.gz file
  rm latest.tar.gz

  echo $cGreen "All Done!"
fi
