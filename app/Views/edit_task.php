<section class="m-5">
  <div class="container">
    <h1>Edit Tasks</h1>
    <div class="card mt-3">
      <div class="card-body">
        <div>
          <h4>Tasks Details</h4>
          <p class="lead fs-6">Please enter the details of the task you want to add.</p>
        </div>
        <form action="/task/edit/<?= $id ?>" method="POST">
          <div class="mb-3 row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="title" value="<?= $title ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="description" rows="2"><?= $description ?></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputDescription" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <select class="form-select" name="status">
                <option value="PENDING" <?= $status === 'PENDING' ? 'selected' : '' ?>>Pending</option>
                <option value="IN PROGRESS" <?= $status === 'IN PROGRESS' ? 'selected' : '' ?>>In Progress</option>
                <option value="COMPLETED" <?= $status === 'COMPLETED' ? 'selected' : '' ?>>Completed</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputDueDate" class="col-sm-2 col-form-label">Due Date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="due_date" value="<?= $due_date ?>">
            </div>
          </div>
          <div class="mt-4">
            <button class="btn btn-primary w-100">Update Task</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>