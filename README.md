# Webpage-Fingerprinter
Originally forked from fingerprintjs2 (thanks guys). 
I developed this web application as an education peace for individuals to gain awareness on browser fingerprinting.

Has been coded with bootstrap so the web application is compatible on mobile devices.

The application itself is very straight foward, once a client visits the webpage the application will extract the following data to a mysql database:

- IP Address
- Operating System
- Browser
- Serialized device fingerprint

Demo: https://demo.8611876.tk


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
- edit the inject.php and enter in your database host, username and password
- import the database.sql file into yout phpMyadmin interface (or via the command line)
- copy all contents within the Webpage-Fingerprinter directory into your /var/www/html folder
- sudo service apache2 (or nginx) restart

Screenshots:
-

![alt text](https://github.com/alegra8611/Webpage-Fingerprinter/blob/main/screenshots/f1.png?raw=true)


 Special Mentions:
 -
 
 - The fingerprintjs team
 - The Pitaya Team
 - The Hak5 Community
 - Marufhasan1 
 - hackerthemes

