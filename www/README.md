
# Pterodactyl Nginx egg - Version Boutique integrêt et Forum php

## How to install
- **Step 1:** Créer un lien vers le répertoire : shop/ sur votre site web.
- **Step 2:** Créer également un lien vers le répertoire : phpBB3/ sur votre site pour le forum.
- **Step 3:** Enregistré votre site web et placé le dans le répertoire "www/" sans toucher aux autres fichiers.
- **Step 4:** Demarrer le serveur ou redémarrer si vous modifiez en local.
- **Step 5:** Créer une base de donnée dans l'onglet "Database". Ajouter un nom dans le champs "DATABASE NAME" et validé simplement.
- **Step 6:** Selectionner vos liens et suivez les instructions dans le paragraphe "**Install Prestashop**" pour la boutique et "**Install Forum**"



## Installation Prestashop
- **Page 1:** Vous serez invitez une fois que vous aurez cliquer sur le lien, à choisir si vous souhaitez la dernière version.
    Cliquez sur "No Thanks" car la dernière version n'est pas stable est compatible chez nous.
    Sa ne gène en rien le fonctionnement correct de votre boutique.
- **Step 2:** Patientez jusqu'a la fin de la décompressions de fichier.. puis sélectionner vote langue, faite suivant et accepter la licence.
- **Step 3:** Remplissez les informations concernant votre boutique, Activez le SSl (recommander) et ajoutez un utilisateur avec un mot de passe qui sera le compte administrateur. **Faite Suivant**
- **Step 4:** Choisissez si vous souhaitez des produits démo ou non. Sélectionner installer tout les modules (Recommander) mais vous pouvez aussi sélectionner ceux qui vous interressent. "**Faite Suivant**"
- **Step 5:** Pour cette partie ont vous demandera les informations de connexion de la base de donnée..
    1- Cliquez sur l'oeil pour afficher les informations de connexion sur votre serveur dans l'onglet "Database" ![image](https://github.com/DarkGoliath2-0/WebBoutForum/assets/168300186/353dc4c2-bff3-4e55-9777-1c2a8fb559bc)

    2- Utilisez 45.140.165.239:3306 comme adresse de connexion
  ![image](https://github.com/DarkGoliath2-0/WebBoutForum/assets/168300186/a835ca78-6d2f-435f-a92d-eefc91968a51)
    3- Renseignez tous les champs avec les informations figurant dans l'affichage suivant :
  ![image](https://github.com/DarkGoliath2-0/WebBoutForum/assets/168300186/dbba2058-d742-469f-bbcf-2631be458015)
    5- Tester la connection avant de valider pour être sur..
    6- Validez et patientez durant l'installation ..
  
- **Step 6:** Après l'installation vous serez sur une page vous donnant accès a la partie administration ou à l'affichage de la boutique..


## How to use https://
Go to the file: 
```bash
/home/container/nginx/conf.d/default.conf
```


Change "listen" to: 
```bash
listen <YOUR_PORT> ssl;
```
Please also change the spacer distance. Otherwise the "listen" will be overwritten each time the egg is restarted.

Add the following lines:
```bash
    ssl_certificate /home/container/your_cert.crt;
    ssl_certificate_key /home/container/your_cert_key.key;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers HIGH:!aNULL:!MD5;
```

Adjust the lines accordingly.
Furthermore, if not already done, adjust to your domain: 
```bash
server_name www.example.com;
```

## Change PHP version
Changing the PHP version is currently still somewhat cumbersome. A revised version will be available in the future.

- **Step 1:** Change the content of the file "php_version.txt" in "/home/container" to the version you want e.g. "8.3"
![txt_file](https://github.com/Ym0T/pterodactyl-nginx-egg/assets/104158130/525c5681-8a3b-423e-a987-3668e8ceb4e3)

- **Step 2:** In your Pterodactyl panel, go to the "Startup" tab on your web server. Change the variable "PHP VERSION" to the desired version.
![variable](https://github.com/Ym0T/pterodactyl-nginx-egg/assets/104158130/84bbbf16-0c1d-4c4b-bac7-c84fb4550afa)

- **Step 3:** Finally, you need to customise the Docker image. Select the appropriate Docker image to match the version.
![docker_image](https://github.com/Ym0T/pterodactyl-nginx-egg/assets/104158130/cf76cf05-a3df-464a-8f86-77a69101bfc4)



- **Step 4:** Restart your container


## PHP extensions
PHP extensions of PHP version 8.3:
```bash
Core, date, libxml, openssl, pcre, zlib, filter, hash, json, random, Reflection, SPL, session, standard, sodium, cgi-fcgi, mysqlnd, PDO, psr, xml, bcmath, calendar, ctype, curl, dom, mbstring, FFI, fileinfo, ftp, gd, gettext, gmp, iconv, igbinary, imagick, imap, intl, ldap, exif, memcache, mongodb, msgpack, mysqli, odbc, pcov, pdo_mysql, PDO_ODBC, pdo_pgsql, pdo_sqlite, pgsql, Phar, posix, ps, pspell, readline, shmop, SimpleXML, soap, sockets, sqlite3, sysvmsg, sysvsem, sysvshm, tokenizer, xmlreader, xmlwriter, xsl, zip, mailparse, memcached, inotify, maxminddb, protobuf, Zend OPcache
```
Small differences in the extensions between the PHP versions

## License
[MIT](https://choosealicense.com/licenses/mit/)

Originally forked and edited from https://gitlab.com/tenten8401/pterodactyl-nginx
