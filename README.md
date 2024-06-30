# Laravel Task Management System
This is a simple task management system built with Laravel. It allows users to create, edit, delete, and mark tasks as completed. Additionally, the application includes a dark mode feature that users can toggle.

### Features
- Create new tasks
- Edit existing tasks
- Delete tasks
- Mark tasks as completed
- Toggle dark mode

### Requirements
- PHP >= 7.3
- Composer
- Laravel 8.x
- MySQL or other database supported by Laravel

### Installation
1. Clone the repository:
```bash
git clone https://github.com/your-username/laravel-task-management-system.git
cd laravel-task-management-system
```

2. Install dependencies:
```bash
composer install
```

3. Set up the environment:
    - Copy the .env.example file to .env:
    ```bash
    cp .env.example .env
    ```

    - Update the .env file with your database credentials:
    ```dotenv
    Copy code
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

4. Generate an application key:
```
bash
php artisan key:generate
```

5. Run the database migrations:
```
bash
php artisan migrate
```
6. Serve the application:
```
bash
Copy code
php artisan serve
```
The application will be available at http://localhost:8000.

### Usage
#### Creating a Task
1. Click on the "Create Task!" button.
2. Fill out the form with the task title and description.
3. Click "Submit" to save the task.

#### Editing a Task
1. Click on the "Edit" button next to the task you want to edit.
2. Update the task information.
3. Click "Update" to save the changes.

#### Deleting a Task
1. Click on the "Delete" (trash bin) button next to the task you want to delete.

#### Marking a Task as Completed
1. Click on the "Yes/No" button in the "Completed" column next to the task you want to mark as completed.
2. The status will toggle between "Yes" (completed) and "No" (not completed).

#### Toggling Dark Mode
1. Click on the "Dark Mode" button at the bottom of the page to enable dark mode.
2. Click on the "Light Mode" button to disable dark mode.

### File Structure
- app/Http/Controllers/TasksController.php: Handles the task management logic.
- app/Models/Task.php: The Task model.
- database/migrations/: Contains the database migration files.
- resources/views/tasks/: Contains the Blade templates for the task views.
    - index.blade.php: Displays the list of tasks.
    - create.blade.php: Form to create a new task.
    - edit.blade.php: Form to edit an existing task.
### Troubleshooting
- Ensure your .env file is properly configured.
- Run php artisan migrate:status to check the status of your migrations.
- Check the Laravel log files (storage/logs/laravel.log) for any errors.
### Contributing
If you find any issues or have suggestions for improvements, feel free to open an issue or submit a pull request.

License
This project is licensed under the MIT License. See the LICENSE file for details.
