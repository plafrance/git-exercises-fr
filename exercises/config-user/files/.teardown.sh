name=$(git config --get user.prev_name)
email=$(git config --get user.prev_email)

git config user.name "$name"
git config user.email "$email"

git config --unset user.prev_name
git config --unset user.prev_email
