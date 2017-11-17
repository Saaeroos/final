<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <meta charset="utf-8">
  <title>Admin: Questions</title>
</head>
<body>
<?php $this->load->view('admin/application/header') ?>

  <div class="container-fluid">
    <div class="row">
      <section id="sidebar" class="col-md-2">
        <?php $this->load->view('admin/application/sidebar_menu') ?>
      </section>

      <section id="main" class="col-md-10">
        <div><h1>List of Questions</h1></div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#ID</th>
              <th scope="col">Title</th>
              <th scope="col">Question</th>
              <th scope="col">NGO Name</th>
              <th scope="col">Created</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php foreach($data as $item){ ?>
              <th scope="row"><?= $item['q_id']?></th>
              <td><?= $item['title']?></td>
              <td><?= $item['q_content']?></td>
              <td><?= $item['ngoname']?></td>
              <td><?= $item['created_at']?></td>
              <td>
                <form method="post" action="/admin/question/delete">
                  <input type="hidden" name="q_id" value="<?= $item['q_id']; ?>">
                  <input type="submit" value="Delete" class="btn btn-danger btn-sm">
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
