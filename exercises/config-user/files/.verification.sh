name=$(git config --get --local user.name)
prev_name=$(git config --get --local user.prev_name)
[ $name == $prev_name ] || echo "Pas de nom configuré"

email=$(git config --get --local user.email)
prev_email=$(git config --get --local user.prev_email)
[ $email == $prev_email ] || echo "Pas de courriel configuré"

