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


</div>

</body>
</html>