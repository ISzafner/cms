## Install aplication step by step
1. Create folder: cms
2. Copy .env.example to .env and change the variables:
   (Only for just for this project you can copy and paste it)
   APP_NAME=CustomCMS
   APP_ENV=local
   APP_KEY=base64:r7ZxLAKmEQJmGtmJ7BGhh4jjJAoIJrYW85kb61xQpM4=
   APP_DEBUG=true
   APP_URL=http://localhost

   DB_CONNECTION=mysql
   DB_HOST=db
   DB_PORT=3306
   DB_DATABASE=cms
   DB_USERNAME=user
   DB_PASSWORD=pass

3. Open terminal in directory file and write in it:
   ``docker-compose build``
   ``docker-compose up``
4. Open new terminal in directory file and write in it:
   ``docker exec -it app bash``
   1. Then write:
      ``composer install``
      ``php artisan key:generate``
      ``php artisan config:cache``
      ``chmod -R 777 storage/ bootstrap/``
5. Open new terminal in write
      ``docker exec -it db bash``
   1. Then write password from MYSQL_ROOT_PASSWORD in docker-compose.yml
      ``mysql -u root -p``
      ``GRANT ALL ON cms.* TO 'user' IDENTIFIED BY 'pass';``
      ``FLUSH PRIVILEGES;``
   2. And exit terminal
6. Go back to terminal with app container and write:
    ``curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash``
    and exit.
7. Go into again by: ``docker exec -it app bash``
    Then write: ``nvm install 14.7.0``
    ``npm install``
    ``npm run dev``
    ``php artisan cache:clear``
    ``php artisan migarte``
8. Go to page: 127.0.0.1
