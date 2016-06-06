@echo off
cd..
ECHO Enter name for the middleware
set /p middlewarename=: 
php artisan make:middleware %middlewarename%