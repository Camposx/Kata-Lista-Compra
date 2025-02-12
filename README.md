# Kata-Lista-Compra

## Descripción
Con esta aplicación podrás crear tu lista de la compra, añadiendo o eliminando productos, y cuando hayas completado tu lista de la compra podrás borrar todos los datos de golpe

## Guía del proyecto
Se deberán introducir los productos y la cantidad por API

## Requisitos de instalación

Para poder probar este proyecto en local necesitarás:

1. XAMPP (o cualquier otro servidor local que soporte PHP y MySQL)

2. Terminal del Sistema Operativo

3. Instalar Composer

4. Instalar NPM via Node.js

5. Xdebug (para poder ver el test coverage)

6. Postman (o cualquier otra plataforma para usar la API, como *Insomnia*)

## 💻 Instalación

1. Clonar el repositorio:
```
    git clone https://github.com/Camposx/Kata-Lista-Compra.git
```

2. Instalar Composer:
```
    composer install
```

3. Instalar NPM:
```
    npm install
```

4. Crear un archivo '.env' tomando de ejemplo el archivo '.env.example' y modificar las líneas:
    - DB_CONNECTION=mysql
    - DB_DATABASE=listacompradb

5. Crear una base de datos en MySQL vacías (yo uso *phpMyAdmin*)

6. Generar la tabla:
```
    php artisan migrate:fresh
```

7. Correr NPM:
```
    npm run dev
```

8. Correr Laravel (en otra terminal):
```
    php artisan serve
```

Con todo esto será posible usar la API del proyecto con la URL que se genere este último comando.


## API Endpoints

Obtener todos los productos de la lista: (GET)
```
    http://127.0.0.1:8000/api/list
```

Añadir un producto: (POST)
```
    http://127.0.0.1:8000/api/list
```

Actualizar un producto de la lista: (PUT)
```
    http://127.0.0.1:8000/api/list/{id}
```

Eliminar un producto de la lista: (DELETE)
```
    http://127.0.0.1:8000/api/list/{id}
```

Elminar todos los productos de la lista: (DELETE)
```
    http://127.0.0.1:8000/api/list
```

## Tests

Este proyecto tiene un **90%** de test coverage.

Si tienes Xdebug instalado puedes probar los tests y ver el coverage en la terminal usando:
```
   php artisan test --coverage
```
Si no tienes Xdbug puedes correr los test sin coverage usando:
```
   php artisan test
```
![image](https://github.com/user-attachments/assets/0e7712c1-87d6-428e-bc4d-aac7b5b9ce32)


## Tecnologías y herramientas

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='MySQL' src='https://img.shields.io/badge/MySQL-100000?style=for-the-badge&logo=MySQL&logoColor=white&labelColor=4479A1&color=4479A1'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Laravel' src='https://img.shields.io/badge/Laravel-100000?style=for-the-badge&logo=Laravel&logoColor=white&labelColor=FF2D20&color=FF2D20'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Postman' src='https://img.shields.io/badge/Postman-100000?style=for-the-badge&logo=Postman&logoColor=white&labelColor=FF6C37&color=FF6C37'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Jira' src='https://img.shields.io/badge/Jira-100000?style=for-the-badge&logo=Jira&logoColor=white&labelColor=0052CC&color=0052CC'/></a>

## Autor

Este proyecto fue desarrollado completamente por:

[Alejandro Campos González](https://github.com/Camposx)
