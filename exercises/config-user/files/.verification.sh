#!/bin/bash

err=0
name=$(git config --get --local user.name)
prevname=$(git config --get --local user.prevname)
if [ "$name" != "" ]
then
	echo "Pas de nom configuré"
	err=1
fi

if [ "$name" == "$prevname" ]
then
	echo "Le nom devrait être $prevname"
	err=1
fi

email=$(git config --get --local user.email)
prevemail=$(git config --get --local user.prevemail)
if [ "$email" != "" ]
then
	echo "Pas de courriel configuré"
	err=1
fi
if [ "$email" == "$prevemail" ]
then
	echo "Le courriel devrait être $prevemail"
	err=1
fi

if [ $err -gt 0 ]
then
	exit $err
else
	git commit -m "Commit avec un nom et courriel configurés."
fi

