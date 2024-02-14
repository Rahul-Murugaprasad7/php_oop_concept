<?php

// Start or resume a session
session_start();

// Define an abstract class for tasks
abstract class Task {
    protected $description;

    public function __construct($description) {
        $this->description = $description;
    }

    abstract public function display();
}

// Define a class for simple tasks, inheriting from Task
class SimpleTask extends Task {
    public function display() {
        echo "{$this->description}<br>";
    }
}

// Define a class for categorized tasks, inheriting from Task
class CategorizedTask extends Task {
    protected $category;

    public function __construct($description, $category) {
        parent::__construct($description);
        $this->category = $category;
    }

    public function display() {
        echo "<strong>{$this->category}:</strong> {$this->description}<br>";
    }
}

// Define a class for a to-do list
class TodoList {
    protected $tasks = [];

    public function addTask(Task $task) {
        $this->tasks[] = $task;
    }

    public function displayTasks() {
        foreach ($this->tasks as $task) {
            $task->display();
        }
    }
}

// Create a new to-do list or retrieve existing tasks from the session
$todoList = isset($_SESSION['todoList']) ? $_SESSION['todoList'] : new TodoList();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the task description and category from the user input
    $taskDescription = isset($_POST['task']) ? $_POST['task'] : '';
    $taskCategory = isset($_POST['category']) ? $_POST['category'] : '';

    // Add a new task to the TodoList if the input is not empty
    if (!empty($taskDescription)) {
        if (!empty($taskCategory)) {
            $newTask = new CategorizedTask($taskDescription, $taskCategory);
        } else {
            $newTask = new SimpleTask($taskDescription);
        }

        $todoList->addTask($newTask);

        // Save the updated to-do list to the session
        $_SESSION['todoList'] = $todoList;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>

<h1>Todo List</h1>

<form method="post">
    <label for="task">Task:</label>
    <input type="text" id="task" name="task" required>
    <label for="category">Category (optional):</label>
    <input type="text" id="category" name="category">
    <button type="submit">Add Task</button>
</form>

<h2>Tasks:</h2>
<?php
// Display tasks using the TodoList object's displayTasks method
$todoList->displayTasks();
?>

</body>
</html>
