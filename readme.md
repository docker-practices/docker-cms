# Web Application (User Management System)

## Introduction
	This is simple basic User management project built on laravel framework using blade template. the following
	Crud is done in this project.

	1. [User Add]
	2. [User Show]
	3. [User Delete]
	4. [User Update]

Here, also use bootstrap CSS.


## Installation with Docker
	1. Download or clone 
		-- for clone --
		git clone [https://github.com/jivangautam/UserManagement.git]

	2. docker-compose up  (Run this command)
	3. After that list CONTAINER (docker ps)
	3. Go inside php container with this command (docker exec -it <container_id> bash)
		eg:- docker exec -it 7136c4462aea bash
	4. After this run composer
		root@7136c4462aea:/var/www/html# composer install
	5. after this follow normal laravel installation process
		root@f441671f6634:/var/www/html# cp .env.example .env
		root@f441671f6634:/var/www/html# php artisan key:generate	


## Project Note
	1. Below the genji.com there is link for add user and user management
	2. Enjoy it


## Project Docker Info
	### Docker-composer.yml file
		build: ./build
			Here is a some confie file for dockerfile(php) and apache hostname  php docker file
		volumes:
            - .:/var/www/html
            it define the volume of current project to docker location (var/www/html) from the same directory
            IN CASE OF Different path
            - ./product:/var/www/html	
            In case of different path
 

        It should be same as in yml file and .env file 	 "DB_HOST=laravelmyqlcms"    	
        	environment:
            - "DB_HOST=laravelmyqlcms"  

            environment:
            - "MYSQL_DATABASE=usermanagement"
            - "MYSQL_USER=admin"
            - "MYSQL_PASSWORD=secret"
            - "MYSQL_ROOT_PASSWORD=jivan"

       Make port number different for every docker file     
       		links:
            	- laravelmyqlcms
        	ports:
           		- 1020:80

      For Database and mysql info     		
          volumes:
            - "./db:/docker-entrypoint-initdb.d"
            - "./dbdata:/var/lib/mysql"  
            (db) Note put your database file inside db folder it will be automatically load your database file in mysql
            dbdata it will automatically create this folder so you can ingore it


      To Run PHP container
      		(docker exec -it <container_id> bash)
      		eg:- docker exec -it 7136c4462aea bash
      		This is your project directory where you can run composer and other laravel command

      To Run mysql container
      		(docker exec -it <container_id> bash)
      		eg:- docker exec -it 7136c4462aea bash
      		This is your mysql directory where you can run mysql command
      		1. mysql -u admin -p 
      			(check your yml file)
      			environment:
	            - "MYSQL_DATABASE=usermanagement"
	            - "MYSQL_USER=admin"
	            - "MYSQL_PASSWORD=secret"
	            - "MYSQL_ROOT_PASSWORD=jivan"
      		2. show databases;
      		3. use <databaseName>
      			eg:- use usermanagement  
      		4. show tables
      		
      			

## DOCKER COMMANDS
	### List all images
	$ docker images

	### Remove images (you can get image id from above command)
	$ docker rmi <image-id>
	$ docker rmi -f <image-id>	(to forcefully delete)

	### List all container in your machine
	$ docker ps -a

	### List only running container in your machine
	$ docker ps

	### To get inside container (you can get container id from above command)
	$ docker exec -it <container-id> bash
	Eg. docker exec -it 7136c4462aea bash

	(To see contain of that container)
	sudo docker exec -it 90e41e0e9548 sh 

	### To stop and remove running container
	$ docker kill <container-id>
	$ docker rm <container-id>

	### To start any stopped container
	cd <project-root-directory>
	$ docker-compose up

	### To rebuild container (useful when you change docker setting or files)
	cd <project-root-directory>
	$ docker-compose up --build

	### To run docker container in background
	cd <project-root-directory>
	$ docker-compose up -d
	$ docker-compose up --build -d






