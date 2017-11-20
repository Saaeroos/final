<?php $this->load->view('html_head', array('title' => 'Edit Profile')) ?>
<?php $this->load->view('header') ?>

  <div class="container">
    <?php $this->load->view('validation_errors') ?>

    <h2>Edit Engineer Profile</h2>

    <form method="POST" action="/user/engineer/profile/update"  enctype="multipart/form-data" accept-charset="utf-8">
      <div class="form-group">
        <label for="form_name">Name:</label>
        <input  name="form_name"   type="text" class="form-control" id="form_name" aria-describedby="nameHelp" placeholder="Enter Name" value="<?php echo $engineer['name'] ?>">
      </div>



      <div class="form-group">
        <label for="form_contact_email">Email:</label>
        <input  name="form_email" type="text" class="form-control" id="form_contact_email" placeholder="Enter Email" value="<?php echo $engineer['email'] ?>">
      </div>

      <div class="form-group">
        <label for="form_fields_activity">Fields of Expertise:</label>
        <input  name="form_fields_activity" type="text" class="form-control" id="form_fields_activity" aria-describedby="form_fields_activityHelp" placeholder="Enter Field of Activities" value="<?php echo $engineer['fields_of_expertise'] ?>">
      </div>

      <div class="form-group">
        <label for="">Linked In:</label>
        <input  name="form_website" type="text" class="form-control" id="form_linkedin_link" aria-describedby="form_linkedin_linkHelp" placeholder="Please enter your Linked In link" value="<?php echo $engineer['linkedin_link'] ?>">
      </div>
      <div class="form-group">
        <label for="form_username">Username:</label>
        <input  name="form_username" type="text" class="form-control" id="form_username" aria-describedby="form_usernameHelp" placeholder="Please choose Username" value="<?php echo $engineer['username'] ?>">
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
          <img src="/uploads/<?php echo $engineer['photo'] ?>" class="rounded" alt="..." width="200" height="200">
        </div>
        <div>
          <input id="form_photo" type="file" name="form_photo" size="20">
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
    </form>


  </div>


</body>
</html>