#!/bin/bash

name=$(git config --get --local user.name)
prevname=$(git config --get --local user.prevname)
[ "$name" == "" ] || echo "Pas de nom configuré"
[ "$name" == "$prevname" ] || echo "Le nom devrait être $prevname"

email=$(git config --get --local user.email)
prevemail=$(git config --get --local user.prevemail)
[ "$email" == "" ] || echo "Pas de courriel configuré"
[ "$email" == "$prevemail" ] || echo "Le courriel devrait être $prevemail"

