name=$(git config --get --local user.name)
prevname=$(git config --get --local user.prevname)
[ $name == $prevname ] || echo "Pas de nom configuré"

email=$(git config --get --local user.email)
prevemail=$(git config --get --local user.prevemail)
[ $email == $prevemail ] || echo "Pas de courriel configuré"

