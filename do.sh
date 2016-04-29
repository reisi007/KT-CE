#!/bin/sh
echo Run Apache app & MySQL
./stop.sh
./run_mysql.sh &&./run_app.sh
