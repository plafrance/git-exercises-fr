# Chase-branch s'est échappée

Vous êtes actuellement sur la branche `chase-branch`. Il existe également une branche `escaped` qui contient deux commits supplémentaires.

       HEAD
         |
    chase-branch        escaped
         |                 |
         A <----- B <----- C


Vous voulez que `chase-branch` pointe vers le même commit que la branche `escaped`.

                        escaped
                           |
         A <----- B <----- C
                           |
                      chase-branch
                           |
                          HEAD
