# Creating a simple MVC in PHP


Model-View-Controller (MVC) is an architectural pattern used in software engineering. It isolates your application's business logic from user interface considerations, resulting in an application where it is easier to modify.

So, I am basically creating a registration and login system in PHP.

My URLs are:-

    http://localhost/mvc/?type=register
    and
    http://localhost/mvc/?type=login

Since, SEO is an important part of any application, I am making the URLs as:-
    
    http://localhost/mvc/register
    and
    http://localhost/mvc/login

Using .htaccess in php (http://cj7.info/htaccess).

The Sql commands are as follows:-

    create database studentDb;
    use studentDb;
    CREATE TABLE `studentDb`.`students` (
     `id` INT NOT NULL AUTO_INCREMENT,
     `name` VARCHAR(45) NULL,
     `email` VARCHAR(45) NULL,
     `password` VARCHAR(45) NULL,
     `user` VARCHAR(45) NULL,
     PRIMARY KEY (`id`));

Once you are done, clone or download zip of this project.




