# Webpage-Fingerprinter
Originally forked from fingerprintjs2 (thanks guys). 
I developed this web application as an education peace for individuals to gain awareness on browser fingerprinting.

Has been coded with bootstrap so the web application is compatible on mobile devices.

The application itself is very straight foward, once a client visits the webpage the application will extract the following data to a mysql database:

- IP Address
- Current IP Location
- Operating System
- Browser
- Serialized device fingerprint

![alt text](https://github.com/alegra8611/Webpage-Fingerprinter/blob/main/screenshots/s10.png?raw=true)

Demo: https://alegra.tk/fingerprinter


Open to any new ideas.

Requirements:
-
- Apache2 or Nginx
- Mysql
- PHPMyadmin

Choose a option:
-

1. Register a domain (FQDN) pointing to your apache2 or nginx server (I'm using apache2)
2. Install ngrok - https://ngrok.com/download and proxy it through to your apache2 (or nginx) server
3. Just locally host the web application 

Install:
-

- git clone https://github.com/alegra8611/Webpage-Fingerprinter.git
- cd Webpage-Fingerprinter
- edit the connect.php located in the /php directory and enter in your database host, username and password
- extract the database.tar.gz archive
- import the database.sql file into yout phpMyadmin interface (or via the command line)
- copy the Webpage-Fingerprinter directory into your /var/www/html directory
- sudo service apache2 (or nginx) restart

Screenshots:
-

![alt text](https://github.com/alegra8611/Webpage-Fingerprinter/blob/main/screenshots/sc1.png?raw=true)


 Special Mentions:
 -
 
 - The fingerprintjs team
 - The Pitaya Team
 - The Hak5 Community
 - Marufhasan1 
 - hackerthemes

