# This page contain all syntax what we learned
##### php and sqlite3
>checking the db is create or not and create db
```
<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
?>
```
##### use commentline to control MYSQL database
>connect to mysql
```
shell> mysql -u username -p
Enter password: *******
```

>disconnect mysql
```
shell> QUIT
Bye
```
<br>

>showing currently exist database on server
```
mysql> SHOW DATABASES;
```
>create an database(called test)
```
mysql> CREATE DATABASE test;
```
>access database(called test)
```
mysql> USE test;
```
<br>

>showing currently exist table in the databse 
```
mysql> SHOW TABLES;
```
>create table
```
mysql> CREATE TABLE pet (name varchar(10), owner varchar(10), sex char(1), birth date, death date);
```
>see description of each variable in the table(i.e. pet table)
```
mysql> DESCRIBE pet;
```

