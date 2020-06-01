# Chore Movies

![hero](https://res.cloudinary.com/djwluqv3m/image/upload/v1590980205/choremovies_ikae3r.png)

## Introduction

This is a Movie showcase built with Laravel and TailwindCSS. I hope this becomes an inspiration to you; feel free to use components of this codebase in your future projects. ❤️

## Requirements

* [PHP](https://php.com) -  v7.4
* [MySQL](https://mysql.com) - v5.7 above

## Installation

>**NOTE**</br>
> * Before the fourth step, you should have created a database for this application
> * The supported database is MySQL

* Clone this repo

  ```bash
  git clone https://github.com/dammy001/chore.git
  ```

* Change directory to project directory

  ```bash
  cd chore
  ```

* Copy `.env` template

  ```bash
  cp .env.example .env
  ```

* Add correct database credentials to the `.env` file, credentials include:
  - `DB_HOST`: This is your database host name/IP address
  - `DB_NAME`: This is your database user
  - `DATABASE_PASSWORD`: This is your database password if any, it should be left blank if no password is configured (localhost)

* Migrate Database

  ```bash
  php artisan migrate
  ```

* Start Queue

  ```bash
  php artisan queue:work database
  ```

* Run application

  ```bash
  php artisan serve
  ```

  This will serve this application on port 8000.

## Usage

>**NOTE**</br>
> #### Sign up with -> </br>
> **Name**</br>
> **E-mail**</br>
> **Password**

|  Page Name	|  Description 	|  Route 	|   Screenshot	|
|---	|---	|---	|---	|
|  Homepage	|  This is the homepage, it links to all other pages 	|  `/` 	|   ![homepage](https://res.cloudinary.com/djwluqv3m/image/upload/v1590980205/choremovies_ikae3r.png)	|
|   Login	|   This page shows the login form which allows you to login into the application	|   `/login`	|   ![login](https://res.cloudinary.com/djwluqv3m/image/upload/v1590981001/login_et1nad.png)	|
|  Register	|  This page shows the register form which allows you login and fire login into the application	|  `/register` 	|   ![register](https://res.cloudinary.com/djwluqv3m/image/upload/v1590980991/register_opnohz.png)	|
|   Movie Details 🍶	|   This page shows the movie details	|   `/show/{movie_id}`	|  ![details](https://res.cloudinary.com/djwluqv3m/image/upload/v1590981622/moviedetails_rkqtww.png) 	|
|  Cast	|  This page allows you to view cast of selected movie	|  `/show/{movie_id}` 	|   ![cast](https://res.cloudinary.com/djwluqv3m/image/upload/v1590981634/cast_ekr0wq.png)	|
|   Search  |   This allows you to search for movie or tv shows	|   `/search`	|  ![search](https://res.cloudinary.com/djwluqv3m/image/upload/v1590982244/search_o8j2x2.png) 	|
|   TV Shows	|   This page shows you tv shows now airing or popular 	|  `/tv-shows` 	|  ![tvshows](https://res.cloudinary.com/djwluqv3m/image/upload/v1590982430/tvshows_eepqim.png) 	|
