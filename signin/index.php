<?php
  include_once 'header.php';
?>


	<form class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal"> Register </h1>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="email" id="name" class="form-control" placeholder="Username" required>
        <label for="name"> Username </label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit"> Submit </button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>


<?php
  include_once 'footer.php';
?>


