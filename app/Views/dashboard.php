  <div class="text-dark text-center py-5">
    <div class="container">
      <h1>Welcome to Task Management System</h1>
      <p class="lead">Manage your tasks effectively and efficiently</p>
      <a href="/task/add" class="btn btn-primary">Add New Task</a>
    </div>
  </div>

  <section class="mt-5">
    <div class="container">
      <h2>Your Tasks</h2>
      <table class="table border mt-4 table-striped">
        <thead>
          <tr class="border">
            <th class="border">Title</th>
            <th class="border">Description</th>
            <th class="border">Due Date</th>
            <th class="border">Status</th>
            <th class="border">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tasks as $task): ?>
            <tr class="border align-middle">
              <td class="border"><?= $task->title ?></td>
              <td class="border"><?= $task->description ?></td>
              <td class="border"><?= $task->due_date ?></td>
              <td class="border">
                <span class="badge bg-<?= $task->status_color ?>"><?= strtoupper($task->status) ?></span>
              </td>
              <td class="border">
                <a href="/task/edit/<?= $task->id ?>" class="btn btn-primary">Edit</a>
                <a href="/task/delete/<?= $task->id ?>" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>