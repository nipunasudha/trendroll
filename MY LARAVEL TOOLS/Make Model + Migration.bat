@echo off
cd..
ECHO Enter name for the Model
set /p modelname=: 
php artisan make:model %modelname% -m