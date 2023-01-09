git branch -D old-branch &>/dev/null
git checkout -b old-branch
touch new_file
git add new_file
git commit -m "new_file"
git branch -D new-branch
