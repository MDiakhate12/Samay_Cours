#!/bin/bash
for i in {2..9}
do
	echo  "alias php$i='php -S localhost:${i}000'"
done