## Heldnodig.nl source

Through this tool, people can ask for help from a heroe nearby. Whether it concerns groceries or babysitting. Everything is possible, as long as it contributes to the goal of protecting vulnerable people and keeping people at work in important vital professions.

### Docker install/run

1. `docker-compose up -d` to launch all the docker containers required for this app
1. `docker exec -it test-php-fpm /bin/sh` into the php container. Within that container run `composer install` to generate the vendor directory containing various dependencies. You will see this appear in the applications source directory.
1. `docker exec -it test-mariadb /bin/sh` into the database container. Within that container run `mysql -u test -p test < database.sql` to generate the database structure.
1. Copy .env.example to .env. No need to actually change any of the variables. The Captcha keys are default test keys for v2 captchas from Google itself so it runs on localhost.
1. You can now open the application at http://localhost:3000 and will be greeted by the welcome page.

Your environment is now in a state where you can edit the various php files, when you refresh your browser, the latest state of your work will be visible because the source directory is loaded _live_ into the running containers.

### Manual install/run

- Setup a (local) webserver
- Run `composer install` to install the dependencies required
- Create a database and import `database.sql`
- Copy `.env.example` to `.env` and fill out the required details


### Contributing

If you want to contribute, but the php-cs-fixer check fails on your merge request:
- Download [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
- Run it with `php-cs-fixer fix -v .`, this will auto fix all the linting issues  
