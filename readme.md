# Installation du projet

## Démarrage des containers :

Lancer les commandes suivantes :

```shell

docker compose build 

docker compose up -d 

```

## Liens utiles :

- Pour accéder à l'admin de Redis: `http://localhost:8083`
- Pour accéder aux serveurs
    - Le frontal 1 : `http://localhost:9001`
    - Le frontal 2 : `http://localhost:9002`
    - Monitoring des serveurs dans HAProxy: `http://localhost/haproxy?stats`
    - accéder au site: `http://localhost`

## Quoi ?

Dans la page principale, on a :

- un lien "login" permettant aux utilisateurs de se connecter avec leur username et password. Ceci est un exemple pour
  simuler la préservation de la session si le load balancer change le serveur.
- un texte affichant l'adresse IP du serveur qui a répondu à la demande. Pour voir l'effet, il faut actualiser la page
  et observer l'adresse ip pour voir si elle change.
