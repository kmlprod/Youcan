# Youcan
 Challenge Back End Laravel Mysql
 command list

git clone git@github.com:kmlprod/Youcan.git

cd Youcan

composer install

cp .env.example .env

php artisan key:generate

php artisan jwt:generate 

Make sure you set the correct database connection information before running the migrations Environment variables

php artisan migrate
php artisan serve

Database seeding

Populate the database with seed data with relationships which includes users, articles, comments, tags, favorites and follows. This can help you to quickly start testing the api or couple a frontend and start using it with ready content.

Open the DummyDataSeeder and set the property values as per your requirement

database/seeds/ProductTableSeeder.php

database/seeds/CategorieTableSeeder.php

Run the database seeder and you're done

php artisan db:seed

Note : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

php artisan migrate:refresh


