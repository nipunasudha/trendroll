@echo off
cd..
start http://localhost:8000
php artisan serve
pause >nul