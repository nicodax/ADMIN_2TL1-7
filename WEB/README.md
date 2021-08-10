# DOCKER

## Créer une image docker
```bash
docker build -t daxxramass/web .
```

## Lister toutes les images docker
```bash
docker images
```

## Exécuter une image docker
```bash
docker run -p 8080:80 --name web-service daxxramass/web
```
> -p permet de spécifier quel port de la machine client doit être
> mappé au port que l'application écoute.
>
> --name permet d'assigner un nom au container.

## Exécuter une image docker en mode détaché
```bash
docker run -d -p 8080:80 --name web-service daxxramass/web
```
> -d permet de lancer le mode détaché

## DockerHub

Connection à DockerHub :
```bash
docker login
```

Tagger une image avec un numéro de version :
```bash
docker tag daxxramass/web daxxramass/web:[VERSION_NUMBER]
```

Push une image sur DockerHub :
```bash
docker push daxxramass/web:[VERSION_NUMBER]
```

Pull une image sur DockerHub :
```bash
docker pull daxxramass/web:[VERSION_NUMBER]
```

## Docker containers

Lister tous les containers Dockers :
```bash
docker ps
```

Inspecter les logs d'un container docker :
```bash
docker logs web-service
```

Interrompre l'exécution d'un container docker :
```bash
docker stop web-service
```

Démarrer l'exécution d'un container docker :
```bash
docker start web-service
```