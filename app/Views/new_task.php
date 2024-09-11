  <section class="m-5">
    <div class="container">
      <h1>Add New Tasks</h1>
      <div class="card mt-3">
        <div class="card-body">
          <div>
            <h4>Tasks Details</h4>
            <p class="lead fs-6">Please enter the details of the task you want to add.</p>
          </div>
          <form action="">
            <div class="mb-3 row">
              <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTitle">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="inputDescription" rows="2"></textarea>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputDueDate" class="col-sm-2 col-form-label">Due Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="inputDueDate">
              </div>
            </div>
            <div class="mt-4">
              <button class="btn btn-primary w-100">Add Task</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>