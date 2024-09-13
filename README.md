# PHP Backend🛫

Welcome to my PHP Backend project, I hope you like it! 📊

<a>
<img src="https://github.com/Anmol-Baranwal/Cool-GIFs-For-GitHub/assets/74038190/ad50585b-2e08-4f45-9836-9bb6d67e2a86" width="550">
</a>
<br><br>

<details>
  <summary>Table of Contents📝</summary>
  <ol>
    <li><a href="#description">Description</a></li>
    <li><a href="#objetive">Objetive</a></li>
    <li><a href="#stack">Stack</a></li>
    <li><a href="#diagram-bd">Diagram</a></li>
    <li><a href="#local-installation">Local installation</a></li>
    <li><a href="#endpoints">Endpoints</a></li>
    <li><a href="#future-functionalities">Future functionalities</a></li>
    <li><a href="#development">Development</a></li>
    <li><a href="#appreciations">Appreciations</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>
<br>

## Description📚

The developed REST API provides the functionality to interact with the frontend in the following ways:

- User registration: Implement the registration of new users in the application.
- User login with authentication using tokens and middleware: Ensure access security through the use of authentication tokens and Laravel middleware.
- Middleware for user roles: Implement user role management to restrict access to certain functionalities.
- CRUD of different models: Create, read, update and delete resources related to the different data models of the application.


## Objetive🎯
The main objective is to develop a solid and functional Backend structure that integrates with an existing Frontend previously developed in React.


## Stack📒
Used technology:
<div align="center">
<a>
    <img src= "https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="php" />
</a>
<a>
    <img src= "https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="laravel" />
</a>
<a>
    <img src= "https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=Composer&logoColor=white" alt="composer" />
</a>
<a>
    <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
</a>
<a>
<img src="https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white" alt="docker" />
</a>

</div>




## Diagram BD📋

    - "Users" to "Appointments": One-to-many relationship where one user can have many appointments.

    - "Services" to "Appointments": One-to-many relationship where one service can have many appointments.

## Local installation🧾
1. Install docker and create a mysql container
1. Clone the repository
2.  ``` $ composer install  ```
3. We connect our repository with the database
4. ``` $ php artisan migrate ``` 
5. ``` $ php artisan db:seed ``` 
6. ``` $ php artisan serve ``` 
7. ...

## Endpoints🧩
<details>
<summary>Authentication🔑</summary>

- **Register user**

          POST http://localhost:4000/api/register

    body:

    ```js
        {
            "email": "david@david.com",
            "password": "123456789"
        }
    ```

<br>

- **Login user**	

          POST http://localhost:4000/api/login

    body:

    ```js
        {
            "email": "david@david.com",
            "password": "123456789"
        }
    ```
</details>
<details>
<summary>Users🧑🏻</summary>

- **View all users** (IS ADMIN)

          GET http://localhost:4000/api/users

    auth:

    ```js
        auth token
    ```

<br>

- **View user profile**

          GET http://localhost:4000/api/users/profile

    auth:

    ```js
        auth token
    ```

<br>

- **Update user profile**

          PUT http://localhost:4000/api/profile/update

    body:

    ```js
        {
        "first_name": "Carlos",
        "last_name": "Leon",
        "email": "carlos@carlos.com",
        "password": "123498765"
        }
    ```

    auth:

    ```js
        auth token
    ```

</details>
<details>
<summary>Services🖋️</summary>

- **View all services**

          GET http://localhost:4000/api/services

    auth:

    ```js
        auth token
    ```

<br>

- **Create service** (IS ADMIN)

          POST http://localhost:4000/api/services

    body:

    ```js
        {
        "service_name": "Tatuajes personalizados",
        "description": "Los clientes tendrán la libertad de seleccionar motivos y diseños únicos, personalizando completamente su experiencia de tatuaje de acuerdo a sus preferencias y gustos."
        }
    ```

    auth:

    ```js
        auth token
    ```

<br>

- **Update service** (IS ADMIN)

          PUT http://localhost:4000/api/services/:id

    body:

    ```js
        {
        "service_name": "update",
        "description": "update"
        }
    ```

    auth:

    ```js
        auth token
    ```

<br>

- **Delete service** (IS ADMIN)

          DELETE http://localhost:4000/api/services/:id

    auth:

    ```js
        auth token
    ```

</details>
<details>
<summary>Appointments📅</summary>

- **Create appointment**

          POST http://localhost:4000/api/appointments/create

    body:

    ```js
        {
        "date": "2024/07/15",
        "service_id": "1"
        }
    ```

    auth:

    ```js
        auth token
    ```

<br>

- **Update my appointment**

          PUT http://localhost:4000/api/appointments/change/:id

    body:

    ```js
        {
        "date": "2024/07/20",
        "service_id": "3"
        }
    ```

    auth:

    ```js
        auth token
    ```

<br>

- **Retrieve appointment by id**

          GET http://localhost:4000/api/appointments/:id

    auth:

    ```js
        auth token
    ```

<br>

- **View appointments user**

          GET http://localhost:4000/api/appointments/user

    auth:

    ```js
        auth token
    ```
</details>

## Future functionalities⏭️
- Advanced logging system
- Data validation
- ...


## Development👨🏻‍💻

```js
const developer = "GuillermoGomez";

console.log("Developed by: " GuillermoGomez);
```

```js
const developer = "DavidFernandez";

console.log("Developed by: " DavidFernandez);
```


## Appreciations💯

I would like to dedicate my thanks to the teachers at Geeks Hubs as well as my day to day peers with whom we can help each other with our problems.


## Contact📲
- **Guillermo Gómez Mediavilla**
  - [GitHub](https://github.com/guillermogm)
- **David Fernandez Valle**
  - [GitHub](https://github.com/Davfernandezz)
