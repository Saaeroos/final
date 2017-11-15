<?php $this->load->view('html_head', array('title' => 'Your NGO Profile')) ?>
<?php $this->load->view('header') ?>

      <div class="container-fluid col-md-9">
        <dl class="row">
          <dt class="col-sm-2">NGO name:</dt>
          <dd class="col-sm-7"><?php echo $ngo['name'] ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2 ">Contact Person:</dt>
          <dd class="col-sm-7"><?php echo $ngo['contact_person'] ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Contact Email:</dt>
          <dd class="col-sm-7"><?php echo $ngo['contact_email'] ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Username:</dt>
          <dd class="col-sm-7"><p><?php echo $ngo['username'] ?></p></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Contact Email:</dt>
          <dd class="col-sm-7"><?php echo $ngo['contact_email']?></dd>
        </dl>

         <dl class="row">
          <dt class="col-sm-2">Field of Activities:</dt>
          <dd class="col-sm-7"><?php echo $ngo['fields_of_activity']?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Website:</dt>
          <dd class="col-sm-7"><?php echo $ngo['website']?></a></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Picture:</dt>
          <dd class="col-sm-7">
            <img src="<?php echo $ngo['profile_photo']?>" class="rounded" alt="..." width="200" height="200">
          </dd>
        </dl>

        <div class="row">
          <nav>
            <a href="/" class="btn btn-primary">Platform</a>
            <a href="#delete" data-toggle="modal" class="btn btn-primary">Delete</a>
            <a href="/user/ngo/profile/edit" class="btn btn-primary">Edit</a>
          </nav>
        </div>
      </div>
    </div>


  <div class="modal" tabindex="-1" role="dialog" id="delete">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete your account?</p>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          <a href="/user/ngo/profile/delete" class="btn btn-primary">Delete Account</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>