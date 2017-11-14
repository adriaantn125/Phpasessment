# Phpassessment

This application requires Php 7,Apache and Mysql server.
To deploy the application clone or get the files and public it to your public_html folder, ot htdocs if you are using xampp.
Create a database called laravelbackend and import the provided SQL file (laravelbackend.sql) in the SQL folder.
Update the .env file with your databse credentials located in laravelbackend folder.
The directory structure should look like.
http://localhost/laravelbackend/public/
http://localhost/angularapp/
This is important for the client application to find the api. If you wanna use a different structure you have to modify the products.js file with the correct links for the api located in /angularapp/controllers
Create a simlink to the Laravel storage folder for file uploads. Or run the php file included createsim.php

http://localhost/laravelbackend/public/ 
Login: test@test.com
Password: 123456
Note: You need to login first only admin users can create admin users.

http://localhost/angularapp/#!/
Login: test2@test.com
Password: 123456
Note: You can use the created user or create a new user form the register button in the navigation bar.
