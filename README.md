Install and run:

1. `docker-compose up -d` to launch all the docker containers required for this app
1. `docker exec -it test-php-fpm /bin/sh` into the php container. Within that container run `composer install` to generate the vendor directory containing various dependencies. You will see this appear in the applications source directory.
1. `docker exec -it test-mariadb /bin/sh` into the database container. Within that container run `mysql -u test -p test < database.sql` to generate the database structure.
1. Copy .env.example to .env. No need to actually change any of the variables. The Captcha keys are default test keys for v2 captchas from Google itself so it runs on localhost.
1. You can now open the application at http://localhost:3000 and will be greeted by the welcome page.

Your environment is now in a state where you can edit the various php files, when you refresh your browser, the latest state of your work will be visible because the source directory is loaded _live_ into the running containers.