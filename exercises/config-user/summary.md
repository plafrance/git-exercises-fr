La commande `git config` permet de configure les variables utilisées par Git. Vous pouvez aussi les consulter (et les modifier) directement dans le fichier .git/config de n'importe quel projet.

Pour configurer une variable de la même façon pour tous vos projets, utilisez `git config --global`. Ces variables sont alors stoquées dans `~/.gitconfig`. C'est une bonne idée de configurer globalement `user.name` et `user.email`.

C'est peut-être maintenant un bon moment de configurer votre éditeur de texte par défaut. Git ouvrira fréquemment un éditeur de texte pour vous. Choisissez celui que vous préférez utiliser en configurant la variable `core.editor`
