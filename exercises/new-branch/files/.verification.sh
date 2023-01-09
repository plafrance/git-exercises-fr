#!/usr/bin/env bash

#Verify the exercice even if the new-branch was not checked out

currentBranch=$(git rev-parse --abbrev-ref HEAD); 
exercise=${1-$currentBranch}; 

if [ $exercise = "old-branch" ]
then
	git push -f origin HEAD:new-branch 2>&1 | sed -n '/\*\*\*/,/\*\*\*/p' | sed 's/remote: //g' | grep -v "\*\*"
	exit 1
fi
