<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <link rel="stylesheet" type="text/css" href="/assets/platform.css">

  <title>Registration</title>
</head>
<body>

</head>
<body>
  <?php $this->load->view('header') ?>

  <div class="container">
  <?php if( null !==($this->session->flashdata('success')) ){ ?>
                <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
                <?php } ?>

               <?php
                    $err = validation_errors('<li>', '</li>');
                    if( $err ) {
                ?>
                    <ul class="list-unstyled alert alert-danger">
                    <?php echo $err; ?>
                    <?php echo $this->upload->display_errors('<li>', '</li>') ?>
                    </ul>
                <?php } ?>


    <h1>Engineer Register</h1>

    <form method="POST" action="/engineer/registration" enctype="multipart/form-data" accept-charset="utf-8">

      <div class="form-group">
        <label for="form_name">Full Name:</label>
        <input  name="form_name"   type="text" class="form-control" id="form_name" aria-describedby="nameHelp" placeholder="Enter Name" value="<?php echo set_value('form_name'); ?>">
      </div>

      <div class="form-group">
        <label for="form_phone">Phone number:</label>
        <input name="form_phone" type="text" class="form-control" id="form_phone" aria-describedby="form_phoneHelp" placeholder="Please enter phone number" value="<?php echo set_value('form_phone'); ?>">

      </div>

      <div class="form-group">
        <label for="form_email">Email address:</label>
        <input  name="form_email" type="text" class="form-control" id="form_email" placeholder="Please enter your email" value="<?php echo set_value('form_email'); ?>">
      </div>

      <div class="form-group">
        <label for="form_fields_expertise">Field of Expertise:</label>
        <input  name="form_fields_expertise" type="text" class="form-control" id="form_fields_expertise" aria-describedby="form_fields_expertiseHelp" placeholder="Enter Field of Expertise" value="<?php echo set_value('form_fields_expertise'); ?>">
      </div>

      <div class="form-group">
        <label for="form_aboutme">About Me:</label>
        <textarea name="form_aboutme" class="form-control" id="form_aboutme" aria-describedby="form_aboutmeHelp" placeholder="Please tell us about youself"><?php echo set_value('form_aboutme'); ?></textarea>
      </div>

      <div class="form-group">
        <label for="form_linkedin">LinkedIn:</label>
        <input  name="form_linkedin" type="text" class="form-control" id="form_linkedin" aria-describedby="LinkedIn" placeholder="Enter LinkedIn" value="<?php echo set_value('form_linkedin'); ?>">
      </div>

      <div class="form-group">
        <label for="form_username">Username:</label>
        <input  name="form_username" type="text" class="form-control" id="form_username" aria-describedby="form_usernameHelp" placeholder="Please choose Username" value="<?php echo set_value('form_username'); ?>">
      </div>


      <div class="form-group">
        <label for="form_password">Password:</label>
        <input  name="form_password" type="password" class="form-control" id="form_password" aria-describedby="form_passwordHelp" placeholder="Please enter your password">
      </div>

      <div class="form-group">
        <label for="form_con_password">Confirm Password:</label>
        <input  name="form_con_password" type="password" class="form-control" id="form_con_password" aria-describedby="form_con_passwordHelp" placeholder="Confirm Password">
      </div>

      <div class="form-group">
        <label for="form_photo">Photo</label>
        <div>
          <input id="form_photo" type="file" name="form_photo" size="20">
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Register</button>
    </form>


  </div>


</body>
</html>