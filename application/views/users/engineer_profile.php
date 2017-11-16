<?php $this->load->view('html_head', array('title' => 'Your Profile')) ?>
<?php $this->load->view('header') ?>

      <div class="container-fluid col-md-9">
        <dl class="row">
          <dt class="col-sm-2">Name:</dt>
          <dd class="col-sm-7"><?php echo $engineer['name'] ?></dd>
        </dl>



        <dl class="row">
          <dt class="col-sm-2">Username:</dt>
          <dd class="col-sm-7"><?php echo $engineer['username'] ?></p></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Your Email:</dt>
          <dd class="col-sm-7"><?php echo $engineer['email'] ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Phone</dt>
          <dd class="col-sm-7"><?php echo $engineer['phone'] ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Field of Expertise:</dt>
          <dd class="col-sm-7"><?php echo $engineer['fields_of_expertise'] ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">LinkedIn:</dt>
          <dd class="col-sm-7"><a href=""><?php echo $engineer['linkedin_link']?></a></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">About Me:</dt>
          <dd class="col-sm-7"><?php echo $engineer['about_me']?>
          </dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Picture:</dt>
          <dd class="col-sm-7">
            <img src="/uploads/<?php echo $engineer['photo'] ?>" class="rounded" alt="..." width="200" height="200">
          </dd>
        </dl>

        <div class="row">
          <nav>
            <a href="/" class="btn btn-primary">Platform</a>
            <a href="#delete" data-toggle="modal" class="btn btn-primary">Delete</a>
            <a href="/user/engineer/profile/edit" class="btn btn-primary">Edit</a>
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
          <a href="/user/eng/profile/delete" class="btn btn-primary">Delete Account</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>


   </body>
</html>



