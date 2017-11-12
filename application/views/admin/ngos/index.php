<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <meta charset="utf-8">
  <title>Admin: NGOs</title>
</head>
<body>

  <header>
    <h4>Admin</h4>
      <h5>Jen</h5>
      <h5>jen@example.com</h5>
  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link platform" href="#">Platform</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Log Out</a>
    </li>

  </ul>
</header>


<div class="">
  <div class="container-fluid">
    <div class="row">
    <section id="sidebar" class="col-md-3">
      

      <?php $this->load->view('admin/application/sidebar_menu') ?>
    </section>

    <section id="main" class="col-md-9">

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NGO Name</th>
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
    </section>
  </div>
  </div>
  </div>
  </body>
  </html>