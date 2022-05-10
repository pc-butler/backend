# PCButler

## API Documentation
### Create new entry
- `/heatmap/api/new/<mac>/<hostname>/<ip>`
- Creates a new entry into the database. Uses current time (Los_Angeles)
### Get all entries
- `/heatmap/api/view`

***

## Security Issues:
- No brute-force rate limiting
- SQL injection (no work done to secure)
- Anyone can freely create an account
- Heatmap data shared between all users (can see other users data)
- API endpoint unsecured. No API keys or verification


***
## Code
Most of the meaningful code can be found in the following files:
- `app/Config/Routes.php` Defines URL's for web and API traffic
- `app/Controllers/Heatmap.php` What is executed on each page visit (Routes.php runs certain functions in Heatmap.php)
- `app/Views/heatmap/index.php` HTML, CSS, and some PHP that acts as the page body. (Heatmap.php includes index.php as a template)

***

## Server Creation
### Create droplet and connect
1. Create digitalocean droplet using password
2. Open the web console & login. Then close window
3. Connect to ssh using windows powershell `ssh root@<ip>`
4. Enter the password (right click or ctrl+shift+v to paste)

### Update system
1. `sudo apt update`
2. `sudo apt upgrade`

We are going to install LAMP (Linux, Apache, MySql, PHP)

### Apache
1. `sudo apt install apache2`
2. `sudo ufw app list` -> We want to open the ports for Apache
3. `sudo ufw allow in "Apache Full"`
4. Go to your IP in your browser. Should see the apache start page (Make sure it is http://<ip>)

### MySql
1. `sudo apt install mysql-server` -> Installs MySql
2. `sudo mysql_secure_installation` -> Secures MySql from common issues. Main point is to make MySql only accessible locally.
3. Say Yes `y` to all EXCEPT validate password plugin.
4. Create a STRONG MySql root password 
5. Should see `Success. All done!`
6. `sudo mysql` to enter MySql mode
7. We are going to change MySql authentication
8. Show current auth table: `SELECT user,authentication_string,plugin,host FROM mysql.user;`
9. In this example, you can see that the root user does in fact authenticate using the auth_socket plugin. To configure the root account to authenticate with a password, run the following ALTER USER command. Be sure to change password to a strong password of your choosing: `ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '<password>';` (password made in step 4)
10. `exit`

### PHP
1. `sudo apt install php libapache2-mod-php php-mysql`
2. `sudo reboot`

### Installing web app & API
1. `cd /var/www/`
2. Download the code `git clone https://github.com/lunarcontrol/eHealth-calendar.git`
3. `cd /etc/apache2/sites-available`
4. `nano 000-default.conf`
5. Change DocumentRoot to `/var/www/eHealth-calendar/public` and add `<Directory "/var/www/eHealth-calendar">                                                                                                                                                                                                                                                         AllowOverride All                                                                                                                                                                                                                                                               </Directory>` below it. ![image](https://user-images.githubusercontent.com/5004460/115809089-53be3000-a3a0-11eb-8465-d008d8d53b83.png)
6. `sudo nano /etc/apache2/mods-enabled/dir.conf`
7. change the middle line to look like:  `DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm`
8. `sudo systemctl restart apache2`
9. Update App url `cd /var/www/eHealth-calendar/app/Config` then `nano App.php` and update $baseURL to your IP.
10. `sudo a2enmod rewrite` to enable an Apache mod rewrite which allows us to have fancy urls
11. Step 8 again. `sudo systemctl restart apache2`

### Configure Database
1. If you go to `http://<ip>/heatmap` you will see that there is a database error. let's set that up now.
2. `sudo apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl` install a visual database tool phpmyadmin https://www.phpmyadmin.net/
3. Check the `apache2` option with the space bar. Tab to the ok button and hit Enter. ![image](https://user-images.githubusercontent.com/5004460/115807063-ba414f00-a39c-11eb-9b2e-e9ede2c29190.png)
4. Select `yes` on the 'Configuring phpmyadmin' screen
5. Paste in your MySql password and tab to the ok button and hit Enter.
6. `sudo phpenmod mbstring`
7. Restart apache2 again `sudo systemctl restart apache2`
8. Go to your IP `http://<ip>/phpmyadmin` and login using `root` as the username and your MySql password.
9. Create a new database. I'm going to call my `royce` ![image](https://user-images.githubusercontent.com/5004460/115659508-83612f80-a2ef-11eb-99da-6e66275a4427.png) ![image](https://user-images.githubusercontent.com/5004460/115659602-a4298500-a2ef-11eb-94ab-aae06c1efc74.png)
10. Import the heatmap.sql file ![image](https://user-images.githubusercontent.com/5004460/115659652-bb687280-a2ef-11eb-9aba-3079ff2d7bfd.png)
11. On the heatmap table, add a user account naming it whatever you want. ![image](https://user-images.githubusercontent.com/5004460/115659761-e3f06c80-a2ef-11eb-976a-c1bf4eea547d.png)
12. Create user with a different secure password. change authentication method to native password like this: ![image](https://user-images.githubusercontent.com/5004460/115659951-29149e80-a2f0-11eb-83db-d4bc7b194cf2.png)
13. Edit app/Config/Database.php to add your database info (`nano /var/www/eHealth-calendar/app/Config/Database.php`): ![image](https://user-images.githubusercontent.com/5004460/115660199-8872ae80-a2f0-11eb-904c-b4134cc4ebe3.png)

### Fix permissions
1. `cd /var/www/`
2. Do `ls -la` We need to change the ownership to the web server for eHealth-calendar
3. `chown www-data:www-data -R eHealth-calendar/`
4. `ls -la` should now show ehealth-calendar with www-data as the owner and group

### Fix php-intl not being installed
1. `sudo apt install php-intl`
2. `sudo systemctl restart apache2`


Done.

