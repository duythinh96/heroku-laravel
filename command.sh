#!/bin/bash

COMMANDS=(
"Docker-Up"
"Docker-Down"
"Docker-Rebuild"
"Docker-exec"
"Npm-install"
"Npm-run"
)


echo Please select a command.
select COMMAND in ${COMMANDS[@]}
do
  if [ -z "$COMMAND" ]; then
    continue
  else
    break
  fi
done
echo You selected $REPLY\) $COMMAND


if [ $COMMAND = "Docker-Up" ]; then
  docker-compose up -d
  docker-compose ps
fi

if [ $COMMAND = "Docker-Down" ]; then
  docker-compose down
  lsof -i :3308  | tail -n 1 | awk '{print $2}' | xargs kill -9
fi

if [ $COMMAND = "Docker-Rebuild" ]; then
  docker-compose build --no-cache
fi

if [ $COMMAND = "Docker-exec" ]; then
  docker-compose exec php-fpm sh
fi

if [ $COMMAND = "Npm-install" ]; then
  docker-compose exec node sh -c "npm install"
fi

if [ $COMMAND = "Npm-run" ]; then
  docker-compose exec node sh -c "npm run dev"
fi

