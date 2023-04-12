<h1>Movie Quotes App</h1>
<hr>
<p>Movie Quotes website is a way to find thousands of movie quotes from different movies and genres. Both Georgian and English languages</p>

---
## Table of Contents
- [Prerequisites](#prerequisites)
- [Tech Stack](#tech-stack)
- [Getting Started](#getting-started)
- [Migrations](#migrations)
- [DrawSql](#draw-sql)
- [Development](#development)
- [Project Structure](#project-structure)

## Prerequisites <a name="prerequisites"></a>
To run Movie Quotes App, you will need the following:

- <img src="https://raw.githubusercontent.com/RedberryInternship/example-project-laravel/7a054d64192f92566a0f48349002e0296a9d5347/readme/assets/php.svg" width="28px"> PHP@8.2 and up
- <img src="https://github.com/RedberryInternship/example-project-laravel/blob/master/readme/assets/mysql.png?raw=true" width="28px"> MYSQL@8 and up
- <img src="https://github.com/RedberryInternship/example-project-laravel/blob/master/readme/assets/npm.png?raw=true" width="28px"> npm@9.5 and up
- <img src="https://github.com/RedberryInternship/example-project-laravel/blob/master/readme/assets/composer.png?raw=true" width="28px"> composer@2 and up

## Tech Stack <a name="tech-stack"></a>
Movie Quotes app App is built using the following technologies:

- <a href="https://laravel.com/docs/6.x"><img src="https://github.com/RedberryInternship/example-project-laravel/blob/master/readme/assets/laravel.png?raw=true" width="13"/> Laravel@10.x</a>  - back-end framework
- <a href="https://github.com/spatie/laravel-translatable"><img src="https://github.com/RedberryInternship/example-project-laravel/blob/master/readme/assets/spatie.png?raw=true" width="13"/> Spatie Translatable</a> - package for translation

## Getting Started <a name="getting-started"></a>
To get started with Movie Quotes App, follow these steps:

1. Clone the repository `git clone https://github.com/RedberryInternship/giorgi-surmanidze-movie-quotes.git`
2. Install dependencies by running `npm install` and `composer install`
3. Create a .env file and add your database credentials
4. Run database migrations by running `php artisan migrate`
5. Start the server by running `php artisan serve`
6. Open the app in your browser at `http://localhost:8000`
7. Now we need to set our env file. Go to the root of your project and execute this command.

`cp .env.example .env`

And now you should provide .env file all the necessary environment variables:


---
MYSQL:
> DB_HOST=127.0.0.1

> DB_PORT=3306

> DB_DATABASE=*****

> DB_USERNAME=*****

> DB_PASSWORD=*****

---

## Migration <a name="migrations"></a>
if you've completed getting started section, then migrating database if fairly simple process, just execute:

`composer test`

---
## DrawSql <a name="draw-sql"></a>
<a href="https://drawsql.app/teams/redberry-35/diagrams/movie-qoutes-db">DrawSql:</a>
<br></br>
<img src="https://i.postimg.cc/mgLhPv4G/draw-SQL-movie-qoutes-db-export-2023-04-10.png" />

---
## Development <a name="development"></a>
You can run Laravel's built-in development server by executing:

`  php artisan serve `

for using tailwind css you may run:

`  npm run dev `
