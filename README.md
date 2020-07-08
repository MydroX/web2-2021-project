# Projet W2-2021 - G10

Repository de l'API pour le projet du groupe 10

## Project requirements
* PHP 7.4
* MySQL 8.0

## Tech used
* Symfony 5
    * makerbundle
    * doctrine
* Github actions (CI/CD)
* Docker custom

## API url
- Base URL  : https://hetic.zinutti.fr
- Get questions by section id : https://hetic.zinutti.fr/api/questions/{section_id}
- Get articlies by section_id : https://hetic.zinutti.fr/api/articles/{section_id}
> Section ID : revenge_porn | digital_traces | phishing

## Production spec
* Hosted VPS by OVH
* Ubuntu 18.04 LTS
* Apache 2

## Docker installation
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
To check if the docker successfully install with execute `docker ps` you should see 3 containers named "w2p.xxx"

## Docker commands 
* Enable docker image : `docker-compose up -d`
* Shutdown docker image : `docker-compose stop`
* Remove docker image : `docker-compose down`

Commands above needs to be executed in `./docker` folder 

* Connect to server : `docker exec -ti w2p.server bash`
* Connect to database : `docker exec -ti w2p.db mysql -uroot -proot`

## Configure dev env
Create file `.env.local` and add `DATABASE_URL=mysql://root:root@db/web2_2021_project?serverVersion=8.0.20` if you are using the docker however you are not copy/paste the line from `.env` and replace with the values who match to your configuration

## Argument (French)
### Comment a été pensé la partie backend ?
Etant donné le besoin et la taille du projet pour la partie backend, j'ai voulu réduire au minimum les dependances et les bundles pour éviter le superflus inutile de code. 

### Technos et composant
Alors pour ce projet comme je l'ai dis le partie back n'était pas énorme, ce qui m'a permis de pouvoir tester quelques technos comme : les github actions pour faire du continuous deployement, ce qui a plutôt bien marcher que ce soit pour le front ou back ; faire une version plus simplifier de mon docker précédent, utiliser dans le projet fil rouge qui est assez gros, afin de correspondre à la façon d'avoir penser le projet. J'ai aussi mis à jour mon VPS de MySQL 5 vers MySQL 8 afin de pouvoir prendre en main la version la plus récente de MySQL, par contre j'ai gardé Apache 2 car je connais déja, que c'était déja présent sur mon VPS et que je préfére à NGINX.

Pour ce qui est du projet en lui même, j'ai utilisé la dernière version de Symfony, c'est à dire la 5, avec le serializer-pack et Doctrine car je voulais faire mieux en terme de propeté et de qualité de code que sur le projet fil rouge en utilisant les même spécifications.

### Le sujet à t'il influencés mon choix ? 
Le projet n'a pas vraiment eu de répercution sur les technos étant donné que nous sommes déja pas mal restreint dans le choix des technos et que je ne vois pas ce que j'aurais pu changer comme choix par rapport à notre sujet. 

## Contributor
Maxime ZINUTTI