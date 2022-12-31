## Résoudre un conflit de fusion


Un conflit de fusion apparaît lorsque vous modifiez différemment la même partie du même fichier
dans deux branches que vous fusionnez.

Les conflits nécessitent que le développeur les résolve à la main.

Votre dépôt ressemble à ceci :

            HEAD
             |
        merge-conflict
             |
    A <----- B
     \
      \----- C
             |
    another-piece-of-work
         
Vous souhaitez fusionner `another-piece-of-work` dans votre branche actuelle.
Cela provoquera un conflit de fusion que vous devrez résoudre.

Votre dépôt devrait ressembler à ceci :

                     HEAD
                      |
                 merge-conflict
                      |
    A <----- B <----- D
     \               /
      \----- C <----/
             |
    another-piece-of-work
                     
