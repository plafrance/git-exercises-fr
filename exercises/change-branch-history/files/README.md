# Changer l'historique de la branche

Vous travailliez sur un problème lorsque que votre patron arrive et vous demande de corriger un bogue qui vient d'être découvert dans l'application.

Parce que votre travail actul n'est pas encore terminé, vous avez décidé de revenir à votre point de départ avant d'apporter le correctif de bogue.

Votre dépôt ressemble à ceci :
            
            HEAD
             |
    change-branch-history
             |
    A <----- B
     \
      \----- C
             |
         hot-bugfix

Vous avez maintenant réalisé que le bogue est vraiment ennuyant et que vous ne voulez pas continuer votre travail sans le correctif que vous avez apporté.

Vous souhaitez que votre dépôt ressemble ait l'air d'avoir été commencé après la correction du bogue :

                     HEAD
                      |
             change-branch-history
                      |
    A <----- C <----- B
             |
         hot-bugfix
