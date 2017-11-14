<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <link rel="stylesheet" type="text/css" href="/assets/platform.css">
  <meta charset="utf-8">


  <title>User Log In</title>
</head>
<body>


  <header>
  <img src="https://www.ewbnl.org/wp-content/themes/ewb/images/logo.svg">
  <a href="/" class="secondary-light-blue">Platform</a>
  <a href="/user/signup" class="secondary-light-blue">Signup</a>
  <button class="btn btn-donate">Donate</button>
  </header>

  <div class="container">

    <form method="POST" action="platform">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username">

      </div>
      <div class="form-group">
        <label for="InputPassword1">Password</label>
        <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Log In</button>
    </form>
    <a href="/admin/forgot_password">Forgot Password?</a>

  </div>


</body>
</html>