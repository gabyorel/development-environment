# Welcome Stranger 👋

Use this repo to quickly setup a development environment with Nginx, PHP and MySQL inside Docker without having to go through the installation and configuration of each service.<br>

## Setting things up

Firstly you'll need to duplicate the file <em>mysql.env.example</em> in the environment directory and rename it to <em>mysql.env</em><br>
You have to fill each variable with values you want to use. These variables will be used for database connection. <br>

Once done, you can build and run the containers.<br>
Before running the below command, make sure to have docker installed and running on your machine :

```
docker-compose up
```

You can use the <em>-d</em> flag to run it as a service in the background.<br>
If you get any error messages, check that Docker is installed and running correctly.

And that's it !<br>
You can now connect to http://localhost/ in your browser. If it's working, you'll see MariaDB version.

## Managing the database

You can connect directly to the database on port 3306 using a client such as MySQL Workbench.