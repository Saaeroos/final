<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <link rel="stylesheet" type="text/css" href="/assets/platform.css">
  <meta charset="utf-8">
  <title>Your Profile</title>
</head>
<body>
  <header>


    <?php $this->load->view('header') ?>




  </header>


      <div class="container-fluid col-md-9">
        <dl class="row">
          <dt class="col-sm-2">NGO name:</dt>
          <dd class="col-sm-7">Medicin Sans Frontier</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2 ">Contact Person:</dt>
          <dd class="col-sm-7">Alan Cook</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Contact Person</dt>
          <dd class="col-sm-7">Alan Cook</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Username:</dt>
          <dd class="col-sm-7"><p>alancook</p></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Contact Email:</dt>
          <dd class="col-sm-7">acook@gmail.com</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Phone</dt>
          <dd class="col-sm-7">+31624567890</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Field of Activities:</dt>
          <dd class="col-sm-7">Lorem ipsum dolor sit amet</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Website:</dt>
          <dd class="col-sm-7">http://www.whatevs.com</a></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Picture:</dt>
          <dd class="col-sm-7">
            <img src="http://www.desicomments.com/dc/21/48574/485741.jpg" class="rounded" alt="..." width="200" height="200">
          </dd>
        </dl>

        <div class="row">
          <nav>
            <a href="/" class="btn btn-primary">Platform</a>
            <a href="/admin/ngos/delete/1<?php //echo $id ?>" class="btn btn-primary">Delete</a>
            <a href="/" class="btn btn-primary">Edit</a>
          </nav>
        </div>
      </div>
    </div>



</body>
</html>