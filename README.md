<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Notification Test

### Sobre este proyecto

Se requiere crear un sistema de notificaciones, capaz de recibir un mensaje y dependiendo de la
categoría del mensaje y de los usuarios suscritos a estos, se notificará al medio que ellos eligieron.

Se manejarán 3 categorías de mensajes:

-   Deportes
-   Finanzas
-   Películas

Y se requiere enviar 3 tipos de notificaciones

-   SMS
-   Email
-   Push Notification

No se requiere que se envíe realmente ningún mensaje o se comunique con alguna API externa, solo
se registrará el envío de dicha notificación en un archivo de Logs o en base de datos.

<p align="center"><img src="public/images/main.png" width="400" alt="Laravel Logo"></p>
<p align="center"><img src="public/images/new.png" width="400" alt="Laravel Logo"></p>

## Pasos para implementar el proyecto

A continuación se detallan los pasos necesarios para implementar el proyecto:

1. **Clonar este repositorio**

        git clone https://github.com/brandonjgsdev/gila-notification-test.git

2. **Instalar paquetes:**

        composer install

3. **Hacer migraciones y ejecutar seeders:**

        php artisan migrate

        php artisan db:seed

4. **Correr la aplicacion:**

        php artisan serve
