<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <meta charset="utf-8">
  <title>Admin: Questions</title>
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

      <section id="main" class="col-md-9">
        <div><h1>List of Questions</h1></div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Question</th>
              <th scope="col">NGO name</th>
              <th scope="col">Number of Answers</th>
              <th scope="col">Status</th>
              <th scope="col">Last active</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Can I manually repair pump?</td>
              <td>Red Cross</td>
              <td>20</td>
              <td>solved</td>
              <td>14-11-2017</td>
              <td>
                <a href="/admin/questions/1<?php //echo $question['id'] ?>" class="btn btn-link">View</a>
                <a href="/admin/questions/delete/1<?php //echo $question['id'] ?>" class="btn btn-link">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
  </div>
</div>
</body>
</html>