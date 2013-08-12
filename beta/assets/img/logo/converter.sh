#!/bin/bash
FILES=./*.png
for f in $FILES
do
  echo "Processing $f file..."
  convert "$f" -colorspace Gray "${f%.png}_gray.png"
done
