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
          <dt class="col-sm-2">Name:</dt>
          <dd class="col-sm-7">Emily Han</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2 ">Contact Person:</dt>
          <dd class="col-sm-7">Alan Cook</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Username:</dt>
          <dd class="col-sm-7"><p>emilyhan</p></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Your Email:</dt>
          <dd class="col-sm-7">emilyhan@gmail.com</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Phone</dt>
          <dd class="col-sm-7">+31624567890</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Field of Expertise:</dt>
          <dd class="col-sm-7">Lorem ipsum dolor sit amet</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">LinkedIn:</dt>
          <dd class="col-sm-7"><a href=""> http://www.linkedIn/alancook</a></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">About Me:</dt>
          <dd class="col-sm-7">Nunc accumsan ac nisi id scelerisque. Etiam sed nisi rutrum, tristique mi in, ultricies nisl. Praesent eget ipsum scelerisque, placerat ipsum eu, bibendum lorem. In sem ipsum, porta ut accumsan et, sodales congue nisi. Nunc suscipit enim vitae consequat tristique.

          </dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Picture:</dt>
          <dd class="col-sm-7">
            <img src="https://study.uwa.edu.au/-/media/UWAFS/Teasers/ImgBtn-ElectricalEngineer.jpg" class="rounded" alt="..." width="200" height="200">
          </dd>
        </dl>

        <div class="row">
          <nav>
            <a href="/" class="btn btn-primary">Platform</a>
            <a href=""<?php //echo $id ?>" class="btn btn-primary">Delete</a>
            <a href="/" class="btn btn-primary">Edit</a>
          </nav>
        </div>
      </div>
    </div>

   </body>
</html>



