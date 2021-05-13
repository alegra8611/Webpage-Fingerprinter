# Webpage-Fingerprinter
Originally forked from fingerprintjs2 (thanks guys). 
I developed this application as an education peace for individuals to gain awareness on browser fingerprinting.

The application itself is very straight foward, once a client visits the webpage the application will extract the following data to a mysql database:

- IP Address
- Operating System
- Browser
- Serialized device fingerprint

Requirements:
-
- Apache2 or Nginx
- Mysql
- PHPMyadmin

Install:
-

- git clone https://github.com/alegra8611/Webpage-Fingerprinter.git
- cd Webpage-Fingerprinter
- edit the inject.php and enter in your database host, username and password
- import the database.sql file into yout phpMyadmin interface (or via the command line)
- copy all contents within the Webpage-Fingerprinter directory into your /var/www/html folder
- sudo service apache2 (or nginx) restart 
