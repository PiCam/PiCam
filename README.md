# PiCamServer<br>

Putting a RasPi Camera on the Internet of Things!<br>
<br>
# Instructions:<br>

Set up Pi normally (Raspbian) with 128mb of dedicated VRAM and overclock to "high"<br>
Install Apache2 Webserver & PHP5<br>
Remove /var/www/html<br>
Download Zip & Unzip or Git Clone into /var/www/PiCamServer<br>
Navigate to /var/www/PiCamServer and execute "git fetch && git pull"<br>
Create "/var/www/PiCamServer/pics" with 777 (-R) permissions<br>
Change documentRoot to /var/www/PiCamServer (sudo nano /etc/apache2/sites-available/000-default.conf)<br>
Make folder "pics" with 775 (777?) permissions<br>
Change your ip in vidstream.php to your pi<br>
Start Webserver<br>
Start PHP<br>
<br>
# To be pasted into 000-default.conf following "documentRoot /var/www/PiCamServer"<br>

\<Directory /><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Options FollowSymLinks<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride None<br>
\</Directory><br>
\<Directory /var/www/PiCamServer><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Options Indexes FollowSymLinks MultiViews<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AllowOverride All<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order allow,deny<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allow from all<br>
\</Directory><br>
# Accessing the webserver: "[pi-ip]" in your browser
