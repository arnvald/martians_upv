Martians UPV
============

Basic instructions to run the project

1) Clone the repository
  git://github.com/arnvald/martians_upv.git

2) Set write permissions to app/cache and app/logs directories.

3) (optional) Configure virtual host on your Apache server

  `<VirtualHost *:80>
      ServerAdmin admin@example.com
      ServerName martians.dev
      DocumentRoot "/path/to/app/martians_upv/web/"
      <Directory /Users/grzes/Sites/php/marsians/web>
        Options +FollowSymLinks -SymLinksIfOwnerMatch
      </Directory>
  </VirtualHost>`

4) (optional) add new address to /etc/hosts
   `127.0.0.1 martians.dev`

5) change filename app/config/parameters.ini.example to parameters.ini

6) check your system configuration
  http://martians.dev/config.php

7) install vendors:
  php bin/vendors install

8) create database:
  php app/console doctrine:database:create

9) create schema:
  php app/console doctrine:schema:create

10) to be continued...
