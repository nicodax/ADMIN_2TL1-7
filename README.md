[![CircleCI](https://circleci.com/gh/nicodax/ADMIN_2TL1-7/tree/main.svg?style=svg)](https://circleci.com/gh/nicodax/ADMIN_2TL1-7/tree/main)

# ADMIN_2TL1-7
2020 - 2021 Administration Systèmes et Réseaux II (T206)

![Image de l'ephec](https://i.imgur.com/k1pB47i.png?1)

## Présentation

Nous sommes des eleves en 2TI de l'[Ephec](https://www.ephec.be/)
* [DELANNOIT Grégoire](https://github.com/thegregouze)
* [DAXHELET Nicolas](https://github.com/nicodax)
* [BEAUFILS Liam](https://github.com/LiamBeaufils)

## Description

Ceci est le repository de notre projet en Administration Systèmes et Réseaux II (T206)

## VPS

Adresse IPv4 : `37.187.225.10`

Username : `daxxramass`

Connection SSH :
```bash
ssh daxxramass@37.187.225.10 -p 55555
```

Connexion pour les professeurs :
```bash
ssh vvandens@37.187.225.10 -p 55555
```

## BUILD

Construire, (re)créer, démarrer et attacher les containers aux service :
```bash
docker-compose up -d --build
```

Arrêter l'exécution de docker-compose :
```bash
docker-compose down
```
