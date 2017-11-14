<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <link rel="stylesheet" type="text/css" href="/assets/platform.css">

  <title>Homepage</title>
  <style type="text/css">
    header{
      background-color: black;
    }
  </style>
</head>
<body>

  <header>
  <img src="https://www.ewbnl.org/wp-content/themes/ewb/images/logo.svg">
  <nav>
    <a href="/user/login" class="secondary-light-blue">Log In</a>
    <a href="/user/signup" class="secondary-light-blue">Signup</a>
    <button class="btn btn-donate">Donate</button>
   </nav>

  </header>

  <div class="container">

    <div class="card-columns">
      <div class="card">
        <img class="card-img-top" src="https://www.ewbnl.org/wp-content/uploads/2016/01/2326068_orig.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title that wraps to a new line</h4>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="/question/details" class="btn btn-primary">View Question</a>
        </div>
      </div>


      <div class="card">
        <img class="card-img-top" src="https://www.ewbnl.org/wp-content/uploads/2016/01/SAM_1966.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          <a href="#" class="btn btn-outline-primary">View Question</a>
        </div>
      </div>
      <div class="card text-center">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card p-3">
        <blockquote class="blockquote mb-0 card-body">
          <p>We believe in the power of people who want to <em>make a change</em></p>
          <footer class="blockquote-footer">
            <small class="text-muted">
              Engineers Without Borders
            </small>
          </footer>
        </blockquote>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://www.ewbnl.org/wp-content/uploads/2016/01/2326068_orig.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title that wraps to a new line</h4>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <a href="#" class="btn btn-primary">View Question</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

  </div>
</body>
</html>