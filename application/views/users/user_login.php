<?php $this->load->view('html_head', array('title' => 'Login')) ?>
<?php $this->load->view('header') ?>

<div class="container">
  <?php $this->load->view('validation_errors') ?>
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
