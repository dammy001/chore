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

* Run application

  ```bash
  php artisan serve
  ```

  This will serve this application on port 8000.

## Usage

>**NOTE**</br>
> #### Sign up </br>
> **Name**</br>
> **E-mail**</br>
> **Password**

