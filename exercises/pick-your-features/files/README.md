## Choisissez vos fonctionnalités

Vous avez implémenté trois fonctionnalités différentes d'un programme dans trois branches thématiques locales différentes.
          
          HEAD             ---- B - feature-b
           |              /
    pick-your-features - Z <--- A - feature-a
                          \
                           ---- C1 <--- C2 - feature-c
                           
Vous voulez avoir toutes ces fonctionnalités, dans leur commit respectif, sur la branche `pick-your-features`.

                        HEAD
                         |
                  pick-your-features
                         |
    Z <--- A <--- B <--- C
