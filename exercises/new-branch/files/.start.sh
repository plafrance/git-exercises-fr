#!/usr/bin/env bash

( git branch -D old-branch  && \
git checkout -b old-branch && \
touch new_file && \
git add new_file && \
git commit -m "new_file" && \
git branch -D new-branch ) &>/dev/null
