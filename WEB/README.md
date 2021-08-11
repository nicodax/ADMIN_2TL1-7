# BUILD WEB SERVICE

**A L'INTERRIEUR DU DOSSIER WEB**

Construire, (re)créer, démarrer et attacher les containers à un service :
```bash
docker-compose up -d
```

Si la commande précédente génère l'erreur :
```bash
> docker-compose up
[+] Running 0/1
 ⠙ Container f09cbbb35a9c_f09cbbb35a9c_f09cbbb35a9c_php-apache  Recreate
Error response from daemon: path /home/daxxramass/Projects/docker-testing-grounds/php/src is mounted on / but it is not a shared mount.
```

Il est alors nécessaire, avant de réessayer, d'exécuter la commande :
```bash
sudo mount --make-shared /
```

Arrêter l'exécution de docker-compose :
```bash
docker-compose down
```

## EXEMPLE D'OUTPUT ATTENDU

Après avoir exécuté `docker-compose up -d`
```bash
[+] Running 13/13
 ⠿ db Pulled
   ⠿ 33847f680f63 Already exists
   ⠿ 5cb67864e624 Pull complete
   ⠿ 1a2b594783f5 Pull complete
   ⠿ b30e406dd925 Pull complete
   ⠿ 48901e306e4c Pull complete
   ⠿ 603d2b7147fd Pull complete
   ⠿ 802aa684c1c4 Pull complete
   ⠿ 715d3c143a06 Pull complete
   ⠿ 6978e1b7a511 Pull complete
   ⠿ f0d78b0ac1be Pull complete
   ⠿ 35a94d251ed1 Pull complete
   ⠿ 36f75719b1a9 Pull complete
[+] Building 3.3s (8/8) FINISHED
 => [internal] load build definition from Dockerfile
 => => transferring dockerfile: 358B
 => [internal] load .dockerignore
 => => transferring context: 2B
 => [internal] load metadata for docker.io/library/php:8.0-apache
 => [auth] library/php:pull token for registry-1.docker.io
 => [1/3] FROM docker.io/library/php:8.0-apache@sha256:6c97f17a4008a952d555310035c2025dbff98c238bb4b2994897e6c9d797ba33
 => => resolve docker.io/library/php:8.0-apache@sha256:6c97f17a4008a952d555310035c2025dbff98c238bb4b2994897e6c9d797ba33
 => CACHED [2/3] RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
 => CACHED [3/3] RUN apt-get update && apt-get upgrade -y
 => exporting to image
 => => exporting layers
 => => writing image sha256:921ecd48588a2f339d3c526f8303f8597f36fd32adebdeda678f32a13e9ea102
 => => naming to docker.io/library/web_php-apache-environment

Use 'docker scan' to run Snyk tests against images to find vulnerabilities and learn how to fix them
[+] Running 3/3
 ⠿ Network web_default   Created
 ⠿ Container db          Started
 ⠿ Container php-apache  Started
```