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
          <dt class="col-sm-2">NGO name:</dt>
          <dd class="col-sm-7"><?= $data['name']; ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2 ">Contact Person:</dt>
          <dd class="col-sm-7"><?= $data['contact_person']; ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Username:</dt>
          <dd class="col-sm-7"><p><?= $data['username']; ?></p></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Contact Email:</dt>
          <dd class="col-sm-7"><?= $data['contact_email']; ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Field of Activities:</dt>
          <dd class="col-sm-7"><?= $data['fields_of_activity']; ?></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Website:</dt>
          <dd class="col-sm-7"><?= $data['website']; ?></a></dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Picture:</dt>
          <dd class="col-sm-7">
            <img src="http://www.desicomments.com/dc/21/48574/485741.jpg" class="rounded" alt="..." width="200" height="200">
          </dd>
        </dl>

        <div class="row">
          <nav>
            <form method="post" action="/admin/engineers">
              <input type="hidden" name="ngo_id" value="<?= $data['id']; ?>">
              <input type="submit" value="Delete" class="btn btn-danger btn-sm">
            </form>
            <form method="post" action="/admin/pending/ngo/approve">
                <input type="hidden" name="ngo_id" value="<?= $item['id']; ?>">
                <input type="submit" value="Approve" class="btn btn-success btn-sm" >
            </form>
          </nav>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
