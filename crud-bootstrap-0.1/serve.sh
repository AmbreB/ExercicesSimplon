#!/bin/bash
php -S localhost:8888 -t app/web &
browser-sync start --proxy="localhost:8888" --files="**/*" &
wait