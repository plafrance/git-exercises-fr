err=0

for fichier in hello.py calc.py RUN.txt
do
    if ! git ls-files | grep -q $fichier
    then
    	echo "Le fichier $fichier n'a pas été ajouté à la zone de préparation"
    	err=1
    fi
done

for fichier in $(git ls-files)
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
else
	git commit -m "Fichiers ajoutés à la zone de préparation" &>/dev/null
fi
   
