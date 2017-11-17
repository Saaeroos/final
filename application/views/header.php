<header>
  <a href="/"><img src="https://www.ewbnl.org/wp-content/themes/ewb/images/logo.svg"></a>

  <nav>
  <?php if(!empty($this->session->userdata('currentUser'))) { ?>
    <a href="/" class="secondary-light-blue">Home</a>
    <a href="/logout" class="secondary-light-blue">Sign out</a>
  <?php } else { ?>
    <a href="/user/login" class="secondary-light-blue">Log In</a>
    <a href="/user/signup" class="secondary-light-blue">Signup</a>
  <?php } ?>

  <?php if ($this->session->currentUser['role'] == 'ngo' ) { ?>
    <a href="/user/ngo/profile">Profile</a>
    <?php } else { ?>
    <a href="/user/engineer/profile">Profile</a>
  <?php } ?>

  <button class="btn btn-donate">Donate</button>
</nav>
</header>
