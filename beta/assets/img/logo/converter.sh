#!/bin/bash
FILES=./*.jpg
for f in $FILES
do
  echo "Processing $f file..."
  convert "$f" "${f%.jpg}.png"
done
