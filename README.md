#Projet W2-2021 - G10

Repository de l'API pour le projet du groupe 10

##Requirements
* PHP 7.4
* MySQL 8.0

##Tech used
* Symfony 5
    * makerbundle
    * doctrine
* Github actions (CI/CD)
* Docker custom

##Production spec
* Hosted VPS by OVH
* Ubuntu 18.04 LTS
* Apache 2

##Docker installation
You will need Linux, MacOS, or Windows 10 Pro to run docker.

Create in your folder `./docker` a file named `docker-compose.override.yml` and copy/paste this block :
```yaml
version: '3'
services:
  server:
    volumes:
      - [folder_who_contain_the_project]/web2_2021_project:/var/www/html
```
Replace `[folder_who_contain_the_project]` by your folder who contain the project.

Now execute `docker-compose up --build` from `./docker`.<br>
To check if the docker successfully install with command `docker ps` you should see 3 containers named "w2p.xxx"

##Docker commands 
* Enable docker image : `docker-compose up -d`
* Shutdown docker image : `docker-compose stop`
* Remove docker image : `docker-compose down`

Commands above needs to be executed in `./docker` folder 

* Connect to server : `docker exec -ti w2p.server bash`
* Connect to database : `docker exec -ti w2p.db mysql -uroot -proot`


##Contributeur
Maxime ZINUTTI