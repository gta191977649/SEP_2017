SEP - 2017 SFO SYSTEM
=============================
Get latest version (git):
https://github.com/gta191977649/SEP_2017.git


System Requiremnt:
-----------------------------
MYSQL >= 5.7.7 
PHP >= 7.1
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
Composer installed

How to install:
-----------------------------
1. Make sure you meet the system requirement above.
2. Open the terminal/cmd.exe go to the root folder of SEP
3. Enter command: coposer install, and wait unitl the process finish
4. After the process is done, you will see an "vendor" folder created
5. replace the "vendor" from in the root of the SEP folder to the vendor.zip
6. open the .env file change the "DB_DATABASE", "DB_USERNAME", "DB_PASSWORD" according to your mysql setting.
7. Enter the command: php artisan migrate, this will create all the tables that needs for our website.
8. After done that just enter command: php artisan serve, and open the url that displayed in the terminal,and you are good 

to go.
