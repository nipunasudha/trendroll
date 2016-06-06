@echo off
cd..
php artisan migrate:refresh --seed
pause >nul