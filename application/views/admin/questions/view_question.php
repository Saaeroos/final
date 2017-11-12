<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <meta charset="utf-8">
  <title>NGO Profile View</title>
  <style type="text/css">
  /*.row{

    display: inline;

    }*/
  </style>
</head>
<body>
  <header>
    <div  id="admin" class="container-fluid">
      <div><h1>Admin Mark</h1></div>
    </div>

    <div class="container-fluid">
      <ul class="nav justify-content-end">
        <li class="nav-item"><a class="nav-link platform" href="#">Platform</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Log Out</a></li>
      </ul>

    </div>

  </header>
  <div class="container-fluid">
    <div class="row">
      <section id="sidebar" class="col-md-3">
        <?php $this->load->view('admin/application/sidebar_menu') ?>
      </section>

      <div class="container-fluid col-md-9">
        <dl class="row">
          <dt class="col-sm-2">Question:</dt>

        </dl>

        <dl class="row">
          <dt class="col-sm-2 ">Posted by NGO:</dt>
          <dd class="col-sm-7">Alan Huyt</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Posted date:</dt>
          <dd class="col-sm-7">November 11, 2017</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Time:</dt>
          <dd class="col-sm-7"><p>23:00</p></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2"><?php //echo ?> How to manually repair pump></dt>
          <dd class="col-sm-7">acook@gmail.com</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Description:</dt>
          <dd class="col-sm-7">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Attached File:</dt>
          <dd class="col-sm-7"><img src="http://www.desicomments.com/dc/21/48574/485741.jpg" class="rounded" alt="..." width="200" height="200"></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">When Needed</dt>
          <dd class="col-sm-7"><?php //echo ?>In two months</dd>
        </dl>



        <div class="row">
          <nav>
            <a href="/admin/ngos" class="btn btn-primary">Back Questions list</a>
            <a href="/admin/ngos/delete/1<?php //echo $id ?>" class="btn btn-primary">Delete</a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</body>
</html>