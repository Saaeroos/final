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
 <?php
      $err = validation_errors('<li>', '</li>');
      if (isset($error_login)) {
        $err .= '<li>'. $error_login . '</li>';
      }

      if(!empty($err)) { ?>
      <ul class="list-unstyled alert alert-danger">
      <?php echo $err; ?>
      </ul>
  <?php } ?>



    <form method="POST" action="/user/login">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter Username" name="username">

      </div>
      <div class="form-group">
        <label for="InputPassword1">Password</label>
        <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
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