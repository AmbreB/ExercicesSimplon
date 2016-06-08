#!/bin/bash
php -S localhost:8888 -t web &
browser-sync start --proxy="localhost:8888" --files="**/*" &
wait