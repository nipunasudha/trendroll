@echo off
cd..
ECHO Enter name for the controller
set /p controllername=: 
php artisan make:controller %controllername%