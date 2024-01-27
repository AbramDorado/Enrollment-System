# CMSC127-MP-Enrollment-System
This is Our Machine Problem in CMSC 127. We made an Enrollment System website using laravel framework. This was done in the second semester of my second year. This project was done with a group of 6, I did this with my classmates. 

Laravel Setup:
1. DL xampp
2. DL composer (procceed installation defult)
3. In terminal go to: C > xampp > htdocs then type: composer create-project --prefer-dist laravel/laravel sampleProj (for testing purposes)
4. Go to: C > Windows > System 32 > drivers > etc > hosts
5. Remove # to uncomment and change it to: 
127.0.0.1      localhost
127.0.0.1      sampleProj.test
6. Go to: C > xampp > apache > conf > extra > httpd-vhosts.conf
7. Copy paste at the bottom:
<VirtualHost *:80>
   DocumentRoot "C:/xampp/htdocs"
   ServerName localhost
</virtualHost>

<VirtualHost *:80>
   DocumentRoot "C:/xampp/htdocs/PROJECT_NAME/public"
   ServerName PROJECT_NAME.test
</virtualHost>

8. Run http://sampleproj.test to check if laravel is working


Database Setup:
1. DL pgadmin 4
2. Go to C > xampp > php.ini
3. Remove ";" from extension=pdo_pgsql to uncomment
4. Remove ";" from "extension=gd" to uncomment (for windows) 
5. Create a database named "test"
6. Restart the server.


Program Setup:
1. Extract the package folder then open folder in IDE
2. Run composer install
3. Run php artisan key:generate
4. Run php artisan migrate --seed (it has some seeded data for your testing)
5. Run the sql commands in the PgAdmin query tool (to update data)
6. Open xampp and start Apache
7. Run the website: php artisan serve
8. Done!

Credit for reference of project:
https://github.com/LaravelDaily/Laravel-Demo-Courses-Enrollment
