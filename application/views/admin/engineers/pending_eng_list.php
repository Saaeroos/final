<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <meta charset="utf-8">
  <title>Admin: NGOs</title>
</head>
<body>
<?php $this->load->view('admin/application/header') ?>

  <div class="container-fluid">
    <div class="row">
    <section id="sidebar" class="col-md-2">
      <?php $this->load->view('admin/application/sidebar_menu') ?>
    </section>


    <section id="main" class="col-md-10">
      <div><h1>List of Pending Engineers</h1></div>



      <table class="table table-striped">

        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Date of Sign Up</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
             <?php foreach ($data as $item){ ?>
            <th scope="row"><?= $item['id']; ?></th>
            <td><?= $item['name']; ?></td>
            <td><?= $item['username']; ?></td>
            <td><?= $item['email']; ?></td>
            <td><?= $item['phone']; ?></td>
             <td><?= $item['created_at']; ?></td>
            <td>
              <form method="post" action="/admin/engineer/details">
                  <input type="hidden" name="eng_id" value="<?= $item['id']; ?>">
                  <input type="submit" value="Details" class="btn btn-primary btn-sm" >
              </form>
              <form method="post" action="/admin/pending/engineer/approve">
                  <input type="hidden" name="eng_id" value="<?= $item['id']; ?>">
                  <input type="submit" value="Approve" class="btn btn-success btn-sm" >
              </form>
              <form method="post" action="/admin/engineer/delete">
                <input type="hidden" name="eng_id" value="<?= $item['id']; ?>">
                <input type="submit" value="Delete" class="btn btn-danger btn-sm" >
              </form>
            </td>

        </tr>
          <?php } ?>

        </tbody>
      </table>
  </section>
  </div>
  </div>
  </div>
  </body>
  </html>
