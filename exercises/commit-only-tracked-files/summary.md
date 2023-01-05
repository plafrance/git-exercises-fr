L'option `-u` ou dans sa forme longue `--update` limite l'ajout de fichiers à la zone de préparation à ceux qui sont déjà suivis par git. 

Il vaut mieux éviter d'ajouter à l'aveuglette tous les fichiers modifiés avec `git add *` ou `git add .`. Vous risquez de poluer votre dépôt avec des fichiers inutiles, ce qui rend le suivi des modifications plus pénible. 

Une bonne pratique consiste à :

1. Ajouter les modifications à la zone de préparation avec `git add`
2. Valider que tous les changements sont voulus et compris avec `git status` et `git diff`
3. Commiter avec un message indiquant clairement ce que les changements apportent

On peut aussi créer un fichier .gitignore pour les fichiers que l'on ne veut jamais commiter... c'est le sujet du prochain exercice!
