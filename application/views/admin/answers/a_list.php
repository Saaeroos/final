<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <meta charset="utf-8">
  <title>Admin: Answers</title>
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
      <section id="sidebar" class="col-md-2">
        <?php $this->load->view('admin/application/sidebar_menu') ?>
      </section>

      <section id="main" class="col-md-10">
        <div><h1>List of Answers</h1></div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#ID</th>
              <th scope="col">Answer</th>
              <th scope="col">Question</th>
              <th scope="col">Engineer Name</th>
              <th scope="col">Created</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php foreach($data as $item){ ?>
              <th scope="row"><?= $item['a_id']?></th>
              <td><?= $item['a_content']?></td>
              <td><?= $item['title']?></td>
              <td><?= $item['name']?></td>
              <td><?= $item['created_at']?></td>
              <td>
                <form method="post" action="/admin/answer/delete">
                  <input type="hidden" name="a_id" value="<?= $item['a_id']; ?>">
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
