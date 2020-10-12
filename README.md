Organize Me

This is a To Do List app to organize your daily life by tasks.

Features:

1-Personal User system
2-Add new tasks
3-Change task status
4-Delete Task

How to use it:
1-You need a server(I use Apache local server with Xampp) where to host the app.
2-You need a Db (For this app I used RDBMS MYSQL)
3-You need to create a new Db and two tabs (one for the users and one for tasks)
Users tab must have 4 fields(ID, username, password, email)
Tasks tab must have 8 fields(ID, title, name, description, inputDate, outputDate, email, status)
For both tabs you have to define the ID field Primary Key and the option AI(auto-increment)
4-Change in "connection.php" file your db credentials
5-Just run the "index.html" file

For this project I used:
PHP - MYSQL - BOOTSTRAP
