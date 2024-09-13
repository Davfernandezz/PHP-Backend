# PHP Backend🧃

Welcome to my PHP Backend project, I hope you like it! 📊

<a>
<img src="https://github.com/Anmol-Baranwal/Cool-GIFs-For-GitHub/assets/74038190/897cd757-ea1f-492d-aaf9-6d1674177e08" width="550">
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

This project consists of a REST API developed by php and laravel that provides the functionality to interact with the interface in the following ways:

-**User registration**: Implement the registration of new users in the application.
-**User login with authentication using tokens and middleware**: Ensure access security through the use of authentication tokens and Laravel middleware.
-**Middleware for user roles**: Implement user role management to restrict access to certain functionalities.
-**CRUD of different models**: Create, read, update and delete resources related to the different data models of the application.

## Objetive🎯
The objective of the project is for the student to become familiar and adapt to the development of backend applications using PHP and Laravel, applying the principles and unique characteristics of this framework. Through this project, the aim is for the student to acquire practical experience in:

-**Agile Development with Laravel**: Take advantage of the advantages of Laravel to create applications quickly and efficiently, using its routing system, database migrations and modular structure.

-**Authentication and Authorization Management**: Implement robust authentication and authorization systems through the use of middleware and tools such as Laravel Passport for token management and route protection.

-**Advanced Use of Eloquent and Collections**: Explore using Eloquent ORM to manage database models effectively, as well as use collections to manipulate and transform data efficiently.

-**Application of Good Practices in PHP**: Adopt the best practices of PHP development, such as the separation of business logic into services, dependency injection and the proper use of common design patterns.

<br>
<p align="center">
<img width="250" alt="" src="img/Descripcion.jpg">
</p>


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

          POST http://127.0.0.1:8000/api/register

    body:

    ```js
        {
            "name":"David",
            "last_name":"Fernandez",
            "email":"david@gmail.com",
            "password":"123456789",
            "password_confirmation":"123456789"
        }
    ```

<br>

- **Login user**	

          POST http://127.0.0.1:8000/api/login

    body:

    ```js
        {
            "email": "david@gmail.com",
            "password": "123456789"
        }
    ```

    <br>

- **Logout**	

          POST http://127.0.0.1:8000/api/logout

    auth:

    ```js
        auth token
    ```
</details>
<details>
<summary>Users🧑🏻</summary>



</details>
<details>
<summary>Services🖋️</summary>



</details>
<details>
<summary>Appointments📅</summary>


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
