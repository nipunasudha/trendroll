@echo off
ECHO Enter name for the app
set /p appname=: 
laravel new %appname% "5.2"