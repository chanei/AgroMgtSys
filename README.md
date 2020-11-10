# Agro Management System

Final Year project

## Project Initialization

- Install composer (<https://getcomposer.org/>)
- Have a working server (wamp / xampp)
- Minimum php version should be 7.3
- have a mysql database setup from your serve
- check the  .env file to get the database name to be created
- git clone the repo
- cd into the project directory
- run ```composer install``` or ```composer update```
- open your editor, change the DB_PORT in the .env field  to ```DB_PORT=3306```
- run ```php artisan key:generate```
- run ```php artisan migrate```
- run ```php artisan db:seed``` to create the user roles and a default user into the database (email: lukwatajohn@gmail.com, password: pass) - this is the super admin
- run ```php artisan serve```
- open the browser using the generated server link and paste it (usually ```localhost:8000```)
