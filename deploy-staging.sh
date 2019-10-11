#!/bin/sh

rsync -crvz --delete-after ./dist/ opendigital@staging.openhealthdigital.co.uk:/var/www/sanofi/sanofi-praluent-commissioning-tool/html/