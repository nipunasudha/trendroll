@echo off
cd..
ECHO Enter name for the seeder
set /p seedername=: 
php artisan make:seeder %seedername%