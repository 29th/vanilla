#!/bin/bash

# Get updates
git reset --hard HEAD
git pull
git status -sb

# Update submodules
git submodule update --init --recursive