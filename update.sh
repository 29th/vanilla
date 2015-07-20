#!/bin/bash

# Get updates
git reset --hard HEAD
git pull origin 29th-extensions-2.1.11
git status -sb

# Update submodules
git submodule update --init --recursive
