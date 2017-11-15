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
  <?php if ($this->session->currentUser['role'] == 'ngo' ) { ?>
  <a href="/user/ngo/profile">Profile</a>
  <?php } else { ?>
  <a href="/user/engineer/profile">Profile</a>
<?php } ?>

  <a href="/" class="secondary-light-blue">Platform</a>
  <button class="btn btn-donate">Donate</button>
  </header>

</head>




<body class="platform">
  <div class="container">
    <?php if ($user['role'] == 'ngo'){ ?>
      <form method="POST" action="/questions/add" class="mb-4">
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Add your question</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="title"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add question</button>
    </form>
  <?php } ?>


<h2>Questions</h2>

<?php foreach ($questions_for_view as $question) { ?>

<div class="card mb-4">
  <?php if(!empty($question['attachment'])) { ?>
    <img class="card-img-top" src="<?php echo $question['attachment'] ; ?> " alt="Card image cap">
  <?php } ?>
  <div class="card-body">
    <h4 class="card-title"><?php echo $question['title'] ; ?></h4>
    <p class="card-text"><?php echo $question['q_content']?></p>
    <a  href="/questions/<?php echo $question['question_id']; ?>" class="btn btn-primary">View Question</a>
  </div>
</div>

<?php } ?>

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
