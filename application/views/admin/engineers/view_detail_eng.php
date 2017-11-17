<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <meta charset="utf-8">
  <title>NGO Profile View</title>
</head>
<body>
   <?php $this->load->view('admin/application/header') ?>

  <div class="container-fluid">
    <div class="row">
      <section id="sidebar" class="col-md-2">
        <?php $this->load->view('admin/application/sidebar_menu') ?>
      </section>

      <div class="container-fluid col-md-10">
        <dl class="row">
          <dt class="col-sm-2">Engineer name:</dt>
          <dd class="col-sm-7"><?= $data['name']; ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2 ">User name:</dt>
          <dd class="col-sm-7"><?= $data['username']; ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Email:</dt>
          <dd class="col-sm-7"><p><?= $data['email']; ?></p></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Phone:</dt>
          <dd class="col-sm-7"><?= $data['phone']; ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Field of Experties:</dt>
          <dd class="col-sm-7"><?= $data['fields_of_expertise']; ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Linkedin Profile:</dt>
          <dd class="col-sm-7"><?= $data['linkedin_link']; ?></a></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">About me:</dt>
          <dd class="col-sm-7"><?= $data['about_me']; ?></a></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Picture:</dt>
          <dd class="col-sm-7">
            <img src="http://www.desicomments.com/dc/21/48574/485741.jpg" class="rounded" alt="..." width="200" height="200">
          </dd>
        </dl>

        <div class="row">
          <nav>
            <a href="/admin/ngos" class="btn btn-primary">Engineer list</a>
            <br><br>
            <form method="post" action="/admin/engineer/delete">
              <input type="hidden" name="eng_id" value="<?= $data['id']; ?>">
              <input type="submit" value="Delete Profile" class="btn btn-danger" >
            </form>
              <br><br><br><br>
          </nav>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
