<!DOCTYPE html>
<html>
<head>



 <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <link rel="stylesheet" type="text/css" href="/assets/platform.css">
  <meta charset="utf-8">

<title>Platform</title>
<header>
  <img src="https://www.ewbnl.org/wp-content/themes/ewb/images/logo.svg">
  <a href="/" class="secondary-light-blue">Platform</a>
  <a href="/user/Profile" class="secondary-light-blue">Profile</a>
  <button class="btn btn-donate">Donate</button>
  </header>

</head>
<body>
  <div class="container">

<form>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Add your question</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Add question</button>

  </form>

<h2>Questions</h2>
<ul class="list-unstyled">
  <li class="media">
    <img class="mr-3" src="..." alt="Generic placeholder image">
    <div class="media-body">
      <h4 class="mt-0 mb-1">List-based media object</h4>
      <h6 class="mt-0 mb-1"><strong>Posted by:</strong> NGO Red cross</h6>
      <h6 class="mt-0 mb-1"><strong>Need answer:</strong> Next Month</h6>
      <h6 class="mt-0 mb-1">Posted at: 20 November 2017</h6>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.


      <button type="submit" class="btn btn-primary">Details</button>

    </div>

</div>

</body>
</html>
