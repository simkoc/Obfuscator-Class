#!/bin/bash

cwd=$(cd "${0%/*}"; pwd)

php -e $cwd/obfuscate_code.php $1
