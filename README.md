# Launcher_Multigaming
Launcher Multigaming WebPanel


#####Requirements:
- Debian 8 or Ubuntu 16
- PHP 7
- Composer
- Mysql server


##WEBPANEL INSTALL GUIDE

Write this commands into the bash:<br>
```bash
git clone https://github.com/MrDarkSkil/Launcher_Multigaming.git -b webpanel
cd Launcher_Multigaming
composer install
```

If all done we need to create a .env file with:
```bash
cp .env.example .env
```

Now generate an encryption key with
```bash
php artisan key:generate
```
If you successfully completed the above steps, you need to configure Mysql connection<br>
into the .env file at this place
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Your_DB_Name
DB_USERNAME=Your_DB_User
DB_PASSWORD=Your_DB_Password
```

Now we go to migrate database with
```bash
php artisan migrate
```




 
