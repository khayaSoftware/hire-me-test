This is built using Laravel (PHP 7.4.7) with a mysql DB (InnoDB)

After cloning repo, copy and rename the env.example and reconfigure it appropiately (name it .env on the root of directory)
Create mysql db and name it laravel or whatever name you have chosen on the .env file created after the previous step
Run composer i to include dependancies
Then open the terminal navigate to the root of cloned directory and run "php artisan migrate" (this inserts tv show data and tv listings into your database) then run "php artisan key:generate" to generate the application key

When its up on browser, you will see my solutions to the questions separated by links on the home page.

If you have any questions please let me know.