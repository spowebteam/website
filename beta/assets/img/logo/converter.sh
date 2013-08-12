#!/bin/bash
FILES=./*
for f in $FILES
do
  echo "Processing $f file..."
  convert $f -colorspace Gray ${f%.jpg}_gray.jpg
  cat $f
done
