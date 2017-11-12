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
     <div  id="admin" class="container-fluid">
      
  
        <div><h2>Admin Mark</h2></div>
        
        

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
      <div><h1>List of Engineers</h1></div>



      <table class="table table-striped">

        <thead>
          <tr>
            <th scope="col">#</th>
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
            <th scope="row">1</th>
            <td>Alan Cook</td>
            <td>alancook</td>
            <td>alancook@example.com</td>
            <td>023456789</td>
             <td>15 November 2017</td>
            <td>
              <button type="button" class="btn btn-link">Edit</button>
              <button type="button" class="btn btn-link">Delete</button>
            </td>
              
         
          
        </tbody>
      </table>
  </section>
  </div>
  </div>
  </div>
  </body>
  </html>