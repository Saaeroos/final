<?php $this->load->view('html_head', array('title' => 'Your Profile')) ?>
<?php $this->load->view('header') ?>

      <div class="container-fluid col-md-9 mb-5">
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
            <a href="/profile/ngo/share_requests" class="btn btn-primary">Back to Share Requests</a>
          </nav>
        </div>
    </div>


   </body>
</html>
