@echo off
cd..
ECHO Enter name for the migration file
set /p migration_file=: 
php artisan make:migration %migration_file%