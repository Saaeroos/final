<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <meta charset="utf-8">
  <title>NGO Profile View</title>
  <style type="text/css">
    .row{
      
      display: inline;

    }
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

    <div class="container-fluid">
     <div class="row">
     <div> 
    <dl class="row">
        <dt class="col-sm-2">Name:</dt>
        <dd class="col-sm-9">Emily Han</dd>
     </dl>   
     </div> 
     <div>
        <dl class="row">
          <dt class="col-sm-2">Username:</dt>
          <dd class="col-sm-9"><p>emilyhan</p></dd>
        </dl>
      </div>
      
      <div> 
        <dl class="row">
          <dt class="col-sm-2">Email:</dt>
          <dd class="col-sm-9">emilyhan@gmail.com</dd>
        </dl> 
       </div>  

       <div> <dl class="row">
          <dt class="col-sm-2">Phone</dt>
          <dd class="col-sm-9">+31624567890</dd>
        </dl> 
       </div> 

       <div>
        <dl class="row">
          <dt class="col-sm-2">Field of Expertise:</dt>
          <dd class="col-sm-9">Lorem ipsum dolor sit amet</dd>
        </dl>
       </div> 

       <div>
        <dl class="row">
          <dt class="col-sm-2">LinkedIn:</dt>
          <dd class="col-sm-9"><a href="">http://www.linkedIn/alancook</a></dd>
        </dl>
       </div>  

        <dl class="row">
          <dt class="col-sm-2">About me:</dt>
          <dd class="col-sm-9">Nunc accumsan ac nisi id scelerisque. Etiam sed nisi rutrum, tristique mi in, ultricies nisl. Praesent eget ipsum scelerisque, placerat ipsum eu, bibendum lorem. In sem ipsum, porta ut accumsan et, sodales congue nisi. Nunc suscipit enim vitae consequat tristique.</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-2">Picture:</dt>
          <dd class="col-sm-9"><img src="01-cat-wants-to-tell-you-laptop.jpg"></dd>
        </dl>

        <button type="submit" class="btn btn-primary">Back Engineer list</button>
        <button type="submit" class="btn btn-primary">Delete</button>

      
      </div>
     

    </div>
  </div> 
 </div>  
</div>
  </body>
  </html>