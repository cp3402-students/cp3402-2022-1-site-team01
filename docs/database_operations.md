## Importing and Exporting the jazztownsville database using XAMPP.

***

### Importing

To import the database from a dump file, first do a `git pull` inside the _jazztownsville_ folder to ensure that you have the latest dump files.

Once you've done that, open up the XAMPP console using the "shell" button.

Inside the XAMPP console, to import data you can use this command:

`mysql -u root jazztownsville < c:\xampp\htdocs\jazztownsville\dumps\dump.sql`

Make sure you change the name of the dump file to the latest dump available, we'll figure out a naming system soon enough.

This authorises you as the user "root" and imports data from the dump file into the database, as indicated by the little arrow thingy.

***

### Exporting

To export the database to a dump file, you can use this simple command:

`mysqldump -u root jazztownsville > htdocs\jazztownsville\dumps\dump2.sql`

Make sure you name the dump file something clever that lets us know that it is the latest, we'll figure out a naming system soon enough.

Notice that the arrow is the other way around and instead of "mysql" we write "mysqldump".

_That's all there is to it!_