#!/bin/bash

name=$(git config --get --local user.name)
prevname=$(git config --get --local user.prevname)
[ "$name" == "" ] || echo "Pas de nom configuré" && exit 1
[ "$name" == "$prevname" ] || echo "Le nom devrait être $prevname" && exit 1

email=$(git config --get --local user.email)
prevemail=$(git config --get --local user.prevemail)
[ "$email" == "" ] || echo "Pas de courriel configuré" && exit 1
[ "$email" == "$prevemail" ] || echo "Le courriel devrait être $prevemail" && exit 1

