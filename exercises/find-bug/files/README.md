## Trouver le commit qui a introduit le bogue
Votre client affirme qu'il y a un bogue dans l'application. Le mot *jackass* est affiché sur l'écran principal.

Il ne peut pas dire quand le mot est apparu la première fois. Cependant, il est sûr qu'il n'y avait pas de *jackass* dans la version 1.0 de l'application.

Il veut que vous trouviez qui a ajouté ceci et que vous le corrigiez dès que possible.

Cependant, la tâche n'est pas si simple. Il s'avère que le texte de l'écran d'accueil est encodé dans le code source avec l'encodage base64 pour des raisons qui dépassent l'entendement.

Il est impossible de simplement rechercher un commit qui introduit ce juron avec la commande `git log -S`. De plus, le texte de l'écran d'accueil a été modifié au cours des 300 derniers commits.

Votre tâche est de trouver le premier commit qui introduit le mot *jackass* et de le pousser pour vérification.

###Justification

Normalement, vous ne faites pas face à des chaînes encodées en base64 dans lesquelles vous devez effectuer une recherche. Cependant, cela simule parfaitement les situation où *quelque chose fonctionnait avant, mais est maintenant cassé*.

Souvent, vous ne pouvez même pas dire où et quand le bogue pourrait avoir été introduit. Dans *la vraie vie*, vous écririez un test unitaire qui vérifie si le bogue existe. Cela vous aiderait à trouver un commit introduisant le bogue.

## Conseils utiles
 
* Tout d'abord, vous ne voulez pas rechercher un commit *jackass* à la main.
 
* Vous pouvez trouver la dernière version de travail connue (sans *jackass*) du projet par l'étiquette (tag) `1.0`.
 
* Vous pouvez décoder le contenu du texte de la page d'accueil avec la commande suivante :
        
`base64 -d < home-screen-text.txt`
 
* `grep` peut vous aider à vérifier si le contenu décodé contient *jackass* ou non. 

Il vaut la peine de savoir qu'avec la command `grep -v` l'option `- v` inverse le comportement par défaut de grep, et renvoie le code d'état `0` si le mot n'a pas été trouvé et `1` si oui.
 
* vous pouvez exécuter n'importe quelle commande dans le shell avec `sh -c "une commande"`
 
* Utilisez les informations ci-dessus pour créer un test unitaire simple qui aiderait à automatiser la recherche d'un premier commit bogué
 
* Lorsque vous trouvez le premier commit contenant *jackass*, vous pouvez le pousser pour vérification avec la commande suivante: 
        
`git push origin COMMIT_ID:find-bug`
