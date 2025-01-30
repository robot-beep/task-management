# Aplicación de Gestión de Tareas en Laravel con Breeze

Este proyecto es una aplicación web para la gestión de tareas, desarrollada con el framework Laravel y el paquete de autenticación Breeze. Permite a los usuarios crear, editar, eliminar y gestionar sus tareas de manera eficiente.

## Tabla de Contenidos

- [Descripción](#descripcion)
- [Requisitos](#requisitos)
- [Instalación](#instalacion)
- [Pruebas](#Pruebas)
- [Uso](#uso)
- [Configuración DB](#Configuración-DB)
- [Tecnologías Utilizadas](#tecnologias-utilizadas)


## Descripción

Está aplicación a sido diseñada como un demo con el objetivo de que puedan evaluar mis habilidades de parte de Lem Systems, fue creado para ser facil de lanzar y revisar. Se utilizó la arquitectura MVC clásica de Laravel con templates Blade.

Se ha adjuntado el archivo .env para facilidad de instalación.


## Requisitos

- **Docker:** [https://www.docker.com/](https://www.docker.com/).
- **Laravel:** [https://getcomposer.org/](https://getcomposer.org/).
- **npm:** [https://nodejs.org/](https://nodejs.org/).

## Instalación

1.  Clona este repositorio:

    ```bash
    git clone https://github.com/robot-beep/task-managment.git
    ```

2.  Accede al directorio del proyecto:

    ```bash
    cd task-managment
    ```
3. Crear la base de datos: 
   ```bash
    docker compose up
    ```

4. Instala las dependencias de Laravel:
    ```bash
    composer install
    ```
5. Instalar dependencias de Vite: 
    ```bash
    npm install
    ```   

6.  Migrar schema a la base de datos: 

    ```bash
    php artisan migrate
    ```

7.  Agregar Seeds a la base de datos (no es necesario, pero llena de tareas y usuarios la base de datos para pruebas)
    
    ```bash
    php artisan db:seed
    ```
   

8.  Correr aplicación en modo desarrollo:

    ```bash
    composer run dev
    ```


9.  Abre tu navegador y accede a la URL `http://localhost:8000` para ver la aplicación en funcionamiento.


## Pruebas

Se han desarrollado pruebas unitarias simples para revisión de funcionalidades de las Tareas. Para revisarlas se puede utilizar el comando: 

    ```bash
    php artisan test
    ```

## Uso

La aplicación permite: 
-  Registro de usuarios
-  Gestión de perfil de usuario. 
-  Creación de tareas. 
-  Eliminación de tareas. 
-  Actualización de tareas. 
-  Asignación de tareas a usuarios. 
-  Filtros dinamicos (no se ven afectados por eliminar un elemento). 

Se agrego un componente simple de pruebas para las tareas. Con pruebas unitarias de funcionalidades. 

## Configuración DB

En caso de tener problemas para crear la base de datos con docker compose, aquí están las caracteristicas de la Base de datos utilizada en el proyecto. 

DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task
DB_USERNAME=user
DB_PASSWORD=password


## Tecnologías Utilizadas

-   Laravel
-   Breeze
-   Docker (para despliegue simple de la base de datos)
-   MariaDB
-   Blade Templates

# task-managment
# task-management
