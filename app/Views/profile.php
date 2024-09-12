  <header class="bg-primary text-white text-center py-5 bg-gradient">
    <div class="container">
      <h1>Sign Up</h1>
      <p class="lead">It's quick and easy</p>
    </div>
  </header>

  <section class="m-5">
    <div class="container">
      <form action="">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Full name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1"
            placeholder="Please enter your full name" value="<?= $name ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput2" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleFormControlInput2"
            placeholder="Please enter your username" value="<?= $username ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput3" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput3"
            placeholder="Please enter your email address" value="<?= $email ?>" readonly>
        </div>
      </form>
    </div>
  </section>