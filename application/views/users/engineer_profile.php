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
          <dd class="col-sm-7"><?php echo $result['name'] ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2 ">Contact Person:</dt>
          <dd class="col-sm-7"><?php echo $data['contact_person
          '] ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Username:</dt>
          <dd class="col-sm-7"><?php echo $data['username'] ?></p></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Your Email:</dt>
          <dd class="col-sm-7"><?php echo $data['your_email'] ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Phone</dt>
          <dd class="col-sm-7"><?php echo $data['phone'] ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Field of Expertise:</dt>
          <dd class="col-sm-7"><?php echo $data['field_of expertise'] ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">LinkedIn:</dt>
          <dd class="col-sm-7"><a href=""> http://www.linkedIn/alancook</a></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">About Me:</dt>
          <dd class="col-sm-7"><?php echo $data['field_of expertise'] ?>
          </dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Picture:</dt>
          <dd class="col-sm-7"><?php echo $data['picture'] ?>
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



