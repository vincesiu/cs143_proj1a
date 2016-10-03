#!/bin/bash

rsync -a ./calculator.php ~/www/calculator.php

if [[ "$1" == '--submit' ]]; then
    mkdir 904280752
    cp {team.txt,readme.txt,calculator.php} 904280752
    zip -r P1A 904280752/
    rm -rf 904280752
    source <(curl -sL http://oak.cs.ucla.edu/classes/cs143/project/p1a_test) 904280752
fi
