  <header class="bg-primary text-white text-center py-5 bg-gradient">
    <div class="container">
      <h1>Login</h1>
      <p class="lead">It's quick and easy</p>
    </div>
  </header>

  <section class="m-5">
    <div class="container">
      <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
          <?= session()->getFlashdata('error') ?>
        </div>
      <?php endif; ?>

      <div class="card">
        <div class="card-body">
          <form action="/auth/login" method="POST">
            <div class="mb-3">
              <label for="exampleFormControlInput2" class="form-label">Username</label>
              <input type="text" class="form-control" name="username"
                placeholder="Please enter your username">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput4" class="form-label">Password</label>
              <input type="password" class="form-control" name="password"
                placeholder="Please enter your password">
            </div>
            <button class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </section>