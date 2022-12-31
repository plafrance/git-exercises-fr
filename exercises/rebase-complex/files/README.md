## Rebase complexe

Vous travailliez sur une branche de sujet `issue-555`. Vous avez remarqué un bogue, que vous avez corrigé dans la branche de sujet `rebase-complex`.

Ensuite, vous avez terminé `issue-555`.

Cependant, vous devez désirez obtenir la correction de  bogue dans votre branche `your-master` sans aucun travail supplémentaire effectué sur `issue-555`.

La situation est la suivante :

                    your-master
                         |
    A <--- B <--- C <--- D
            \
             E <--- F <--- G - issue-555
              \
               H <--- I
                      |
                rebase-complex
                      |
                     HEAD

Seuls les commits `H` et `I` doivent être rebasés sur `D`.

Essayez de le faire avec une seule commande git.
