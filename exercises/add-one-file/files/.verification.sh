err=0

if [ "$(git diff --cached --name-only)" == "" ]
then
	echo "Le fichier nouveau.txt n'a pas été ajouté à la zone de préparation"
	err=1
fi

if [ $err -eq 0 -a "$(git diff --cached --name-only)" != "nouveau.txt" ]
then
	echo Seulement le fichier nouveau.txt doit être ajouté à la zone de préparation
	err=2
fi

if [ $err -gt 0 ]
then
	exit $err
else
	git commit -m "Fichiers ajoutés à la zone de préparation" &>/dev/null
fi
   
