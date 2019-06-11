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
<hr>
>showing currently exist database on server
```
mysql> show databases;
```
>
