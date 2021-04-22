# php-calendar

## Maybe it works

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
2. Download the code `git clone https://github.com/lunarcontrol/php-calendar.git`
3. `cd /etc/apache2/sites-available`
4. `nano 000-default.conf`
5. Change DocumentRoot to `/var/www/php-calendar`
6. `sudo nano /etc/apache2/mods-enabled/dir.conf`
7. change the middle line to look like:  `DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm`
8. `sudo systemctl restart apache2`
9. Update App url `cd /var/www/php-calendar/app/Config` then `nano App.php` and update $baseURL to your IP.
10. `sudo a2enmod rewrite` to enable an Apache mod rewrite which allows us to have fancy urls
11. Step 8 again. `sudo systemctl restart apache2`

### Configure Database
1. If you go to `http://<ip>/heatmap` you will see that there is a database error. let's set that up now.
2. `sudo apt install phpmyadmin php-mbstring php-zip php-gd php-json php-curl` install a visual database tool phpmyadmin https://www.phpmyadmin.net/
3. Check the `apache2` option with the space bar. Tab to the ok button and hit Enter.
4. Paste in your MySql password and tab to the ok button and hit Enter.
5. `sudo phpenmod mbstring`
6. Restart apache2 again `sudo systemctl restart apache2`



Done.

