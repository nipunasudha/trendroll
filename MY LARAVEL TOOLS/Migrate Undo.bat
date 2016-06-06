@echo off
cd..
php artisan migrate:rollback
pause >nul