# NativePHP - CRUD

Este proyecto es una aplicación de escritorio desarrollada con **PHP Native** y **Laravel 10** utilizando **PHP 8.1**. La aplicación permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre categorías, con campos como `name` y `description`.

## Requisitos

- **PHP 8.1 o superior**
- **Composer** (para gestionar dependencias)
- **Laravel 10**
- **Base de datos**: SQLite

## Instalación

1. Clona este repositorio en tu máquina local:
   ```bash
   git clone https://github.com/StevenU21/NativePHP-CRUD.git
   ```

2. Navega a la carpeta del proyecto:
   ```bash
   cd NativePHP-CRUD
   ```

3. Instala las dependencias con Composer:
   ```bash
   composer install
   ```

4. Configura el archivo `.env` para conectar la base de datos correctamente.

5. Ejecuta las migraciones para crear las tablas necesarias:
   ```bash
   php artisan native:migrate
   ```

6. Ejecuta el servidor de desarrollo:
   ```bash
   php artisan native:serve
   ```

## Video de demostración

Mira un video de demostración de la aplicación en el siguiente enlace:

[Ver video de demostración](https://vimeo.com/1070217177/f4515c46c5)
