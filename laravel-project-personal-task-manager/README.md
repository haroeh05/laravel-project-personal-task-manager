# Personal Task Manager

A Laravel-based web application for creating, managing, updating, and deleting personal tasks. The project demonstrates fundamental web application concepts, including CRUD operations, database migrations, validation, routing, controllers, Blade views, and responsive interface design.

## Project Overview

The Personal Task Manager helps users organize their daily responsibilities in one central location. Users can create tasks, view existing tasks, edit task information, update task status, and remove completed or unnecessary tasks.

## Features

- Create new personal tasks
- View all saved tasks
- Edit task titles, descriptions, and details
- Update task status
- Delete tasks
- Form validation and user feedback
- Responsive layout for desktop and mobile screens
- Database-backed task storage
- Clear and accessible user interface

## Technologies Used

- **Laravel**
- **PHP**
- **Blade Templates**
- **MySQL**
- **HTML5**
- **CSS3**
- **XAMPP**
- **Composer**
- **Vite**

## Requirements

Before installing the project, ensure the following software is installed:

- PHP 8.1 or newer
- Composer
- MySQL
- Node.js and npm
- XAMPP or another local PHP development environment

## Installation

1. Clone or download the project:

   ```bash
   git clone https://github.com/your-username/laravel-project-personal-task-manager.git
   cd laravel-project-personal-task-manager
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Install frontend dependencies:

   ```bash
   npm install
   ```

4. Create the environment file:

   ```bash
   copy .env.example .env
   ```

5. Generate the Laravel application key:

   ```bash
   php artisan key:generate
   ```

6. Create a MySQL database, then update the database settings in `.env`:

   ```env
   DB_DATABASE=personal_task_manager
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Run the database migrations:

   ```bash
   php artisan migrate
   ```

8. Start the frontend development server:

   ```bash
   npm run dev
   ```

9. In a second terminal, start the Laravel server:

   ```bash
   php artisan serve
   ```

10. Open the application in a browser:

   ```text
   http://127.0.0.1:8000
   ```

## Main Application Workflow

1. Open the application.
2. Create a new task using the task form.
3. Review all tasks on the task list.
4. Edit task information when required.
5. Update the task status as work progresses.
6. Delete tasks that are no longer needed.

## Project Structure

```text
app/
├── Http/Controllers/
├── Models/

database/
├── migrations/

resources/
├── css/
├── views/

routes/
└── web.php
```

## Learning Objectives

This project was created to demonstrate the following Laravel concepts:

- MVC architecture
- Resourceful routing
- Controllers and models
- Eloquent ORM
- Database migrations
- Blade templating
- Form submission and validation
- CRUD functionality
- Reusable CSS styling
- Local development using XAMPP

## Future Improvements

Possible future improvements include:

- User authentication
- Individual task ownership
- Due dates and reminders
- Task categories and priorities
- Search and filtering
- Pagination
- REST API integration
- Automated feature and unit tests

## Testing

Laravel's test suite can be executed with:

```bash
php artisan test
```

## License

This project was created for educational purposes.

## Required Information

Project Code: WST21-PM-2026-SF
Student Name: Haroeh Trazo
Course & Year: BSIT - 7
Database Used: MySQL
Features:
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status