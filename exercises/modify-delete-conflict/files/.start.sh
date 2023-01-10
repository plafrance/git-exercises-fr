#!/usr/bin/env bash

echo à modifier > conserver.txt
echo à modifier > supprimer.txt

git add conserver.txt supprimer.txt
git commit -m "origine"

git checkout -b autre

echo modification faite > supprimer.txt
git add supprimer.txt
git rm conserver.txt
git commit -m "Autres modifications"

git checkout modify-delete-conflict

echo modification faite > conserver.txt
git add conserver.txt
git rm supprimer.txt
git commit -m "Mes modifications"


git merge autre
