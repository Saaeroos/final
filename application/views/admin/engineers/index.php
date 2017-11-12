<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <meta charset="utf-8">
  <title>Admin: Engineers</title>
</head>
<body>

  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link platform" href="#">Platform</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Log Out</a>
  </li>

</ul>
  <h4>Admin</h4>
  <h5>Jen</h5>
  <h5>jen@example.com</h5>

  <?php $this->load->view('admin/application/sidebar_menu') ?>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Full name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Username</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>