#!/bin/bash
set -e
cd packages/qflex
./vendor/bin/phpstan analyze
