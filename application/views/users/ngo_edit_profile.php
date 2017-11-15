<?php $this->load->view('html_head', array('title' => 'Edit Profile')) ?>
<?php $this->load->view('header') ?>

  <div class="container">
    <?php $this->load->view('validation_errors') ?>

    <h2>Edit NGO Profile</h2>

    <form method="POST" action="/user/ngo/profile/update">
      <div class="form-group">
        <label for="form_name">NGO Name:</label>
        <input  name="form_name"   type="text" class="form-control" id="form_name" aria-describedby="nameHelp" placeholder="Enter Name" value="<?php echo $ngo['name'] ?>">
      </div>

      <div class="form-group">
        <label for="form_contact_person">Contact Person:</label>
        <input name="form_contact_person" type="text" class="form-control" id="form_contact_person" aria-describedby="form_contact_personHelp" placeholder="Enter Contact Person" value="<?php echo $ngo['contact_person'] ?>">

      </div>

      <div class="form-group">
        <label for="form_contact_email">Contact Email:</label>
        <input  name="form_contact_email" type="text" class="form-control" id="form_contact_email" placeholder="Enter Email" value="<?php echo $ngo['contact_email'] ?>">
      </div>

      <div class="form-group">
        <label for="form_fields_activity">Field of Activities:</label>
        <input  name="form_fields_activity" type="text" class="form-control" id="form_fields_activity" aria-describedby="form_fields_activityHelp" placeholder="Enter Field of Activities" value="<?php echo $ngo['fields_of_activity'] ?>">
      </div>

      <div class="form-group">
        <label for="">Website:</label>
        <input  name="form_website" type="text" class="form-control" id="form_website" aria-describedby="form_websiteHelp" placeholder="Please enter your NGO website" value="<?php echo $ngo['website'] ?>">
      </div>
      <div class="form-group">
        <label for="form_username">Username:</label>
        <input  name="form_username" type="text" class="form-control" id="form_username" aria-describedby="form_usernameHelp" placeholder="Please choose Username" value="<?php echo $ngo['username'] ?>">
      </div>


      <div class="form-group">
        <label for="form_password">Password:</label>
        <input  name="form_password" type="password" class="form-control" id="form_password" aria-describedby="form_passwordHelp" placeholder="Please enter your password">
      </div>

      <div class="form-group">
        <label for="form_con_password">Confirm Password:</label>
        <input  name="form_con_password" type="password" class="form-control" id="form_con_password" aria-describedby="form_con_passwordHelp" placeholder="Confirm Password">
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
    </form>


  </div>


</body>
</html>