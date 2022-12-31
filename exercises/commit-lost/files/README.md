## Trouver un commit qui a été perdu

Vous avez créé un commit avec un travail très important. Vous vouliez ensuite corriger quelque chose dans le dernier commit et vous l'avez donc modifié. 

Cependant, vous venez de réaliser que vous avez accidentellement commité les mauvaises modifications et vous avez désespérément besoin de la première version du commit que vous venez de modifier.

Cependant, il n'y a pas de version précédente dans l'historique, puisque vous avez modifié le dernier commit avec `git commit --amend`.

Votre objectif est de trouver la première version du commit dans le dépôt. Ça doit être quelque part...

Une fois trouvé, forcez la branche `commit-lost` à pointer à nouveau dessus et vérifiez la solution.
