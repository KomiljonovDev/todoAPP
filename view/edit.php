<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://images.pexels.com/photos/628241/pexels-photo-628241.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
        }

        body {
            background-color: #f8f9fa;
        }

        .edit-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .edit-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn-actions {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
<div class="edit-container">
    <h2 class="edit-header">Edit Task</h2>
    <form method="POST" , action="/todos/<?= $todo['id'] ?>/update">
        <input name="_method" , value="PUT" type="text" , hidden="">
        <div class="form-group">
            <label for="taskName" class="form-label">Task Name</label>
            <input type="text" id="taskName" class="form-control" placeholder="Enter task name" name="title"
                   value="<?= $todo['title'] ?>">
        </div>
        <div class="form-group">
            <label for="taskStatus" class="form-label">Status</label>
            <select id="taskStatus" class="form-select" name="status">
                <option value="Completed" <?= $todo['status'] == 'completed' ? 'selected' : '' ?>>Completed</option>
                <option value="Pending" <?= $todo['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                <option value="in_progress" <?= $todo['status'] == 'in_progress' ? 'selected' : '' ?>>In-progress
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="taskDueDate" class="form-label">Due Date</label>
            <input type="datetime-local" id="taskDueDate" class="form-control" value="<?= $todo['due_date'] ?>"
                   name="due_date">
        </div>
        <div class="btn-actions">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="/todos" class="btn btn-secondary"
               style="display: inline-block; padding: 10px 20px; color: #fff; background-color: #6c757d; text-decoration: none; border-radius: 5px; font-size: 16px; text-align: center; transition: background-color 0.3s ease;">Back
                to Todo list</a>
        </div>
    </form>
</div>
</body>
</html>
