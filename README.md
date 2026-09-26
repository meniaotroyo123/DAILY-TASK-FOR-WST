# Daily Tasks - WST

A simple Laravel-based Task Management System developed for WST.

## Features

* Add new tasks
* View all tasks
* View task details
* Edit existing tasks
* Delete tasks
* Update task status
* Set task due dates
* Simple and clean green-themed interface

## Task Information

Each task contains:

* **Task Name**
* **Description**
* **Status** — Pending or Completed
* **Due Date**

## Technologies Used

* Laravel
* PHP
* MySQL
* Blade
* CSS
* Vite
* Git & GitHub

## Database

The project uses a `tasks` table with the following fields:

* `id`
* `task_name`
* `description`
* `status`
* `due_date`
* `created_at`
* `updated_at`

## Running the Project

1. Install the project dependencies:

```bash
composer install
npm install
```

2. Create your `.env` file and configure the database.

3. Run the database migrations:

```bash
php artisan migrate
```

4. Start the Laravel development server:

```bash
php artisan serve
```

5. Start Vite:

```bash
npm run dev
```

6. Open the application in your browser at:

```text
http://127.0.0.1:8000
```

## Project Purpose

This project was created as a Web Systems and Technologies (WST) activity to demonstrate basic Laravel CRUD operations, database integration, routing, Blade views, and frontend styling.
