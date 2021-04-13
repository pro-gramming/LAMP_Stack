#!/bin/bash

docker-compose up -d 
docker exec -i database sh -c 'exec mysql -uroot -p"1234" simple-website' < database.sql
