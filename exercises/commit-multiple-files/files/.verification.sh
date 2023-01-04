#!/bin/bash
err=0

for fichier in hello.py calc.py RUN.txt
do
    if ! git diff --cached --name-only | grep -q $fichier
    then
    	echo "Le fichier $fichier n'a pas été ajouté à la zone de préparation"
    	err=1
    fi
done

for fichier in $(git diff --cached --name-only)
do
    if echo hello.py calc.py RUN.txt | grep -qv $fichier 
    then
    	echo "Le fichier $fichier n'aurait pas dû être ajouté à la zone de préparation"
    	err=2
    fi
done

if [ $err -gt 0 ]
then
	exit $err
fi
   
